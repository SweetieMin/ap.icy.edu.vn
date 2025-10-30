<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Models\Course;
use App\Support\Course\CourseHelper;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\CourseRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CourseRepository implements CourseRepositoryInterface
{
    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        $locations = app(UserRepositoryInterface::class)->getCurrentUserLocations();
        return Course::whereIn('location_id', $locations->pluck('id'))
            ->with(['location', 'season', 'subject'])
            ->orderBy('ordering')
            ->paginate($perPage);
    }

    public function getAllWithFilters(array $filters, int $perPage = 10): LengthAwarePaginator
    {
        $locations = app(UserRepositoryInterface::class)->getCurrentUserLocations();
        $query = Course::whereIn('location_id', $locations->pluck('id'))
            ->with(['location', 'season', 'subject']);

        // Lọc theo tên lớp học
        if (!empty($filters['search'])) {
            $search = $filters['search'];
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
                    ->orWhereHas('location', function ($locationQuery) use ($search) {
                        $locationQuery->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('season', function ($seasonQuery) use ($search) {
                        $seasonQuery->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('subject', function ($subjectQuery) use ($search) {
                        $subjectQuery->where('name', 'like', '%' . $search . '%');
                    });
            });
        }

        // Lọc theo location
        if (!empty($filters['location_id'])) {
            $query->where('location_id', $filters['location_id']);
        }

        // Lọc theo season
        if (!empty($filters['season_id'])) {
            $query->where('season_id', $filters['season_id']);
        }

        return $query->orderBy('ordering')->paginate($perPage);
    }

    public function getCoursesBySeasonAndProgram(int $seasonId, int $programId)
    {
        return Course::where('season_id', $seasonId)
            ->whereHas('subject', function ($query) use ($programId) {
                $query->where('program_id', $programId);
            })
            ->with(['location', 'season', 'subject'])
            ->get();
    }

    public function getCourseById(int $id)
    {
        return Course::with(['location', 'season', 'subject'])->find($id);
    }

    public function getAvailableCoursesForStudent(int $studentId, int $seasonId, int $programId)
    {
        return Course::where('season_id', $seasonId)
            ->whereHas('subject', function ($query) use ($programId) {
                $query->where('program_id', $programId);
            })
            ->with(['location', 'season', 'subject'])
            ->get();
    }

    public function getCoursesWithActiveSeasons()
    {
        $now = now();

        return Course::with(['season', 'subject', 'location'])
            ->whereHas('season', function ($q) use ($now) {
                $q->where(function ($q) use ($now) {
                    $q->where('start_date', '<=', $now)
                        ->where('end_date', '>=', $now);
                })
                    ->orWhere('start_date', '>', $now);
            })
            ->orderBy('name')
            ->get()
            ->filter(fn($c) => in_array($c->season->current_status, ['ongoing', 'upcoming']))
            ->map(fn($c) => [
                'id'            => $c->id,
                'name'          => $c->name,
                'code'          => $c->code,
                'season_name'   => $c->season->name,
                'season_code'   => $c->season->code,
                'season_status' => $c->season->current_status,
                'subject_name'  => $c->subject->name ?? 'N/A',
                'location_name' => $c->location->name ?? 'N/A',
                'description'   => $c->description,
            ])
            ->values()
            ->toArray();
    }

    public function create(array $data)
    {
        $course = Course::create($data);
        CourseHelper::updateCourseOrdering();
        return $course;
    }

    public function update(int $id, array $data)
    {
        $course = Course::findOrFail($id);
        $course->update($data);
        CourseHelper::updateCourseOrdering();
        return $course;
    }

    public function delete(int $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return $course->delete();
    }

    public function updateOrdering(array $orderedIds): void
    {
        foreach ($orderedIds as $index => $id) {
            Course::where('id', $id)->update(['ordering' => $index + 1]);
        }
    }

    public function getCoursesByAuthIdAndSeasonId()
    {
        $user = Auth::user();
        $now = now();

        if ($user->hasRole('BOD')) {
            $courses = Course::query()
                ->select('courses.*')
                ->join('course_user', 'course_user.course_id', '=', 'courses.id')
                ->join('seasons', 'seasons.id', '=', 'courses.season_id')
                ->when(!$user->hasRole('BOD'), function ($query) use ($user) {
                    $query->where('course_user.user_id', $user->id);
                })
                ->whereIn('seasons.status', ['ongoing', 'upcoming'])
                ->with(['location', 'season', 'subject'])
                ->orderBy('courses.name')
                ->distinct()
                ->get();
        } else {
            $courses = Course::query()
                ->select('courses.*')
                ->join('course_user', 'course_user.course_id', '=', 'courses.id')
                ->join('seasons', 'seasons.id', '=', 'courses.season_id')
                ->where('course_user.user_id', $user->id)
                ->whereIn('seasons.status', ['ongoing', 'upcoming'])
                ->with(['location', 'season', 'subject'])
                ->orderBy('courses.name')
                ->get();
        }

        return $courses;
    }

    public function getClassStudentsByCourseId(int $courseId)
    {
        return User::with(['detail', 'roles', 'courses'])
            ->whereHas('courses', function ($q) use ($courseId) {
                $q->where('course_id', $courseId);
            })
            ->whereHas('roles', function ($q) {
                $q->where('name', 'student');
            })
            ->get();
    }
}

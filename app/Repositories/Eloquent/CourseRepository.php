<?php

namespace App\Repositories\Eloquent;

use App\Models\Course;
use App\Support\Course\CourseHelper;
use App\Repositories\Contracts\CourseRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
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
            ->whereHas('subject', function($query) use ($programId) {
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
            ->whereHas('subject', function($query) use ($programId) {
                $query->where('program_id', $programId);
            })
            ->with(['location', 'season', 'subject'])
            ->get();
    }

    public function getCoursesWithActiveSeasons()
    {
        $now = now();
        
        return Course::with(['season', 'subject', 'location'])
            ->whereHas('season', function($query) use ($now) {
                $query->where(function($q) use ($now) {
                    // Season đang diễn ra (dựa trên ngày tháng)
                    $q->where('start_date', '<=', $now)
                      ->where('end_date', '>=', $now);
                })->orWhere(function($q) use ($now) {
                    // Season sắp diễn ra (dựa trên ngày tháng)
                    $q->where('start_date', '>', $now);
                });
            })
            ->orderBy('name')
            ->get()
            ->filter(function($course) {
                // Lọc thêm dựa trên status được tính toán
                $currentStatus = $course->season->current_status;
                return in_array($currentStatus, ['ongoing', 'upcoming']);
            })
            ->map(function($course) {
                return [
                    'id' => $course->id,
                    'name' => $course->name,
                    'code' => $course->code,
                    'season_name' => $course->season->name,
                    'season_code' => $course->season->code,
                    'season_status' => $course->season->current_status,
                    'subject_name' => $course->subject->name ?? 'N/A',
                    'location_name' => $course->location->name ?? 'N/A',
                    'description' => $course->description,
                ];
            })
            ->values() // Reset array keys after filter
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
}
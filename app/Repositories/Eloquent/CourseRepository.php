<?php

namespace App\Repositories\Eloquent;

use App\Models\Course;
use App\Support\Course\CourseHelper;
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
<?php

namespace App\Support\Course;

use App\Models\Course;
use App\Repositories\Contracts\SubjectRepositoryInterface;

class CourseHelper
{
    public static function generateCourseName($locationId, $seasonId, $subjectId)
    {
        $subject = app(SubjectRepositoryInterface::class)->getSubjectById($subjectId);

        // Tạo base code từ tên subject
        $words = explode(' ', $subject->name);
        $baseCode = '';
        foreach ($words as $word) {
            if (is_numeric($word)) {
                $baseCode .= $word;
            } else {
                $baseCode .= strtoupper(substr($word, 0, 1));
            }
        }

        $suffix = 1;
        $finalCode = $baseCode . '.' . $suffix;

        while (
            Course::where('name', $finalCode) 
            ->where('location_id', $locationId)
            ->where('season_id', $seasonId)
            ->exists()
        ) {
            $suffix++;
            $finalCode = $baseCode . '.' . $suffix;
        }

        return $finalCode;
    }

    public static function updateCourseOrdering($positions = null)
    {
        if ($positions == null) {
            $pCourse = Course::orderBy('ordering')->get();
            $positions = $pCourse->map(function ($pCourse, $index) {
                return [$pCourse->id, $index + 1];
            });
        }

        foreach ($positions as $position) {
            $index = $position[0];
            $newPosition = $position[1];
            Course::where('id', $index)->update(['ordering' => $newPosition]);
        }
    }

}

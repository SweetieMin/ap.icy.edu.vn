<?php

namespace App\Support\TimeTable;

use Carbon\Carbon;
use App\Models\ClassSchedule;
use Illuminate\Support\Facades\Auth;

class TimeTableHelper
{
    /**
     * Tự động tạo lịch học cho khóa học
     */
    public static function autoCreateClassScheduleTimeTable(
        int $courseId,
        int $sessionA,
        int $sessionB,
        int $shift,
        string $startDate,
        string $endDate
    ) {
        if (self::checkCourseHaveClassSchedule($courseId)) {
            return false;
        }

        $start = Carbon::parse($startDate)->startOfDay();
        $end   = Carbon::parse($endDate)->endOfDay();

        $dayA = self::getDayOfWeek($sessionA);
        $dayB = self::getDayOfWeek($sessionB);

        [$startTime, $endTime] = self::getStartTimeAndEndTimeByShift($shift);

        $count = 0;
        $current = $start->copy();

        while ($count < 24) {
            if ($current->englishDayOfWeek === $dayA || $current->englishDayOfWeek === $dayB) {
                $count++;
                self::createSchedule($courseId, $current, $startTime, $endTime, $count);
            }

            $current->addDay();

            if ($current->gt($end)) {
                break;
            }
        }

        return true;
    }

    /**
     * Tự động tạo lịch học cho khóa học với 2 ca học khác nhau
     */
    public static function autoCreateClassScheduleTimeTableWithDifferentShifts(
        int $courseId,
        int $sessionA,
        int $sessionB,
        int $shiftA,
        int $shiftB,
        string $startDate,
        string $endDate
    ) {
        if (self::checkCourseHaveClassSchedule($courseId)) {
            return false;
        }

        $start = Carbon::parse($startDate)->startOfDay();
        $end   = Carbon::parse($endDate)->endOfDay();

        $dayA = self::getDayOfWeek($sessionA);
        $dayB = self::getDayOfWeek($sessionB);

        [$startTimeA, $endTimeA] = self::getStartTimeAndEndTimeByShift($shiftA);
        [$startTimeB, $endTimeB] = self::getStartTimeAndEndTimeByShift($shiftB);

        $count = 0;
        $current = $start->copy();

        while ($count < 24) {
            if ($current->englishDayOfWeek === $dayA) {
                $count++;
                self::createSchedule($courseId, $current, $startTimeA, $endTimeA, $count);
            } elseif ($current->englishDayOfWeek === $dayB) {
                $count++;
                self::createSchedule($courseId, $current, $startTimeB, $endTimeB, $count);
            }

            $current->addDay();

            if ($current->gt($end)) {
                break;
            }
        }

        return true;
    }

    /**
     * Lấy danh sách loại sự kiện
     */
    public static function getKindOfEvents()
    {
        return [
            'class_schedule' => 'Lịch học',
            'exam_midterm' => 'Kiểm tra giữa kì',
            'exam_final' => 'Kiểm tra cuối kì',
            'meeting' => 'Họp phụ huynh',
            'event' => 'Sự kiện',
        ];
    }

    public static function getColorByEventType($eventType)
    {
        return match ($eventType) {
            'Lịch học' => 'bg-blue-500',
            'Kiểm tra giữa kì' => 'bg-amber-500',
            'Kiểm tra cuối kì' => 'bg-rose-500',
            'Họp phụ huynh' => 'bg-violet-500',
            'Sự kiện' => 'bg-emerald-500',
            default => 'bg-blue-500',
        };
    }

    protected static function createSchedule($courseId, $current, $startTime, $endTime, $index)
    {
        $name = match ($index) {
            13 => 'Kiểm tra giữa kì',
            24 => 'Kiểm tra cuối kì',
            default => 'Lịch học'
        };

        $color = match ($index) {
            13 => 'bg-amber-500',
            24 => 'bg-rose-500',
            default => 'bg-blue-500',
        };

        ClassSchedule::create([
            'course_id' => $courseId,
            'name' => $name,
            'date' => $current->format('Y-m-d'),
            'start_time' => $current->format('Y-m-d') . ' ' . $startTime . ':00',
            'end_time' => $current->format('Y-m-d') . ' ' . $endTime . ':00',
            'room_name' => 'Phòng học 1',
            'note' => '',
            'color' => $color,
            'created_by' => Auth::user()->id,
        ]);
    }

    protected static function checkCourseHaveClassSchedule(int $courseId)
    {
        return ClassSchedule::where('course_id', $courseId)->exists();
    }

    public static function getStartTimeAndEndTimeByShift(int $shift)
    {
        return match ($shift) {
            1 => ['09:00', '10:30'],
            2 => ['10:30', '12:00'],
            3 => ['14:00', '15:30'],
            4 => ['16:00', '17:30'],
            5 => ['17:45', '19:15'],
            6 => ['19:30', '21:00'],
        };
    }

    /**
     * Xác định ca học theo giờ bắt đầu (giờ 24h)
     */
    public static function calculateShiftByHour(int $startTimestamp, int $endTimestamp): int
    {
        $startHour = (int) date('H', $startTimestamp);
        $endHour   = (int) date('H', $endTimestamp);

        foreach (self::getAllShifts() as $shift => [$start, $end]) {
            $startH = (int) explode(':', $start)[0];
            $endH   = (int) explode(':', $end)[0];

            if ($startHour >= $startH && $endHour <= $endH) {
                return $shift;
            }
        }

        return 1; // mặc định nếu không khớp ca nào
    }

    private static function getAllShifts(): array
    {
        return [
            1 => ['09:00', '10:30'],
            2 => ['10:30', '12:00'],
            3 => ['14:00', '15:30'],
            4 => ['16:00', '17:30'],
            5 => ['17:45', '19:15'],
            6 => ['19:30', '21:00'],
        ];
    }


    /**
     * Tên ca học dạng đầy đủ
     */
    public static function getShiftName(int $shift): string
    {
        return match ($shift) {
            1 => 'Ca 1 (09:00 - 10:30)',
            2 => 'Ca 2 (10:30 - 12:00)',
            3 => 'Ca 3 (14:00 - 15:30)',
            4 => 'Ca 4 (16:00 - 17:30)',
            5 => 'Ca 5 (17:45 - 19:15)',
            6 => 'Ca 6 (19:30 - 21:00)',
            default => 'Ca ' . $shift,
        };
    }

    /**
     * Màu badge cho ca học (nền nhạt + chữ đậm)
     */
    public static function getShiftBadgeColor(int $shift): string
    {
        return match ($shift) {
            1 => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200',
            2 => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200',
            3 => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200',
            4 => 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200',
            5 => 'bg-pink-100 text-pink-800 dark:bg-pink-900 dark:text-pink-200',
            6 => 'bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200',
            default => 'bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200',
        };
    }

    public static function getShiftIconColor($shift)
    {
        return match ($shift) {
            1 => 'bg-blue-500',
            2 => 'bg-amber-500',
            3 => 'bg-rose-500',
            4 => 'bg-violet-500',
            5 => 'bg-emerald-500',
            6 => 'bg-indigo-500',
            default => 'bg-blue-500',
        };
    }

    public static function getShiftIconTextColor($shift)
    {
        return match ($shift) {
            1 => 'text-blue-500',
            2 => 'text-amber-500',
            3 => 'text-rose-500',
            4 => 'text-violet-500',
            5 => 'text-emerald-500',
            6 => 'text-indigo-500',
            default => 'text-blue-500',
        };
    }

    public static function getDayOfWeek(int $date)
    {
        return match ($date) {
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday',
            6 => 'Saturday',
            7 => 'Sunday',
        };
    }

    public static function getTimeTableByRole($role)
    {
        $userId = Auth::id();
        switch ($role) {
            case 'BOD':
                return ClassSchedule::with('course')->orderBy('start_time')->get();
            case 'CENTER MANAGER':
                return ClassSchedule::with('course')->orderBy('start_time')->get();
            case 'RECEPTIONIST':
                return ClassSchedule::with('course')->orderBy('start_time')->get();
            default:
                return ClassSchedule::with(['course.subject'])
                ->whereHas('course.users', function ($q) use ($userId) {
                    $q->where('users.id', $userId);
                })
                ->orderBy('start_time')
                ->get();
        }
    }
}

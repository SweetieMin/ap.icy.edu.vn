<?php

namespace App\Livewire\Back\General\Dashboard;

use Flux\Flux;
use App\Models\Course;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Title;
use Illuminate\Support\Collection;
use Omnia\LivewireCalendar\LivewireCalendar;
use App\Repositories\Contracts\TimeTableRepositoryInterface;

#[Title('Lịch học')]
class TimeTable extends LivewireCalendar
{
    public $modalView = 'vendor.livewire-calendar.modal-time-table-view';


    public $startTime;
    public $endTime;
    public $roomName;
    public $eventColor;
    public $courseName;
    public $eventName;
    public $teacherName;

    public function afterMount($extras = [])
    {
        $this->modalView = $extras['modalView'] ?? 'vendor.livewire-calendar.modal-time-table-view';
    }

    public function events(): Collection
    {
        $events = app(TimeTableRepositoryInterface::class)->getSchedulesByRole();

        return $events->map(function ($event) {
            // Xử lý date - có thể là string hoặc Carbon instance
            $date = is_string($event->date) ? $event->date : $event->date->format('Y-m-d');

            // Xử lý start_time và end_time - có thể là string hoặc Carbon instance
            $startTime = is_string($event->start_time) ? date('H:i', strtotime($event->start_time)) : $event->start_time->format('H:i');
            $endTime = is_string($event->end_time) ? date('H:i', strtotime($event->end_time)) : $event->end_time->format('H:i');

            return [
                'id' => $event->id,
                'title' => $startTime . ': Lớp - ' . $event->course->name,
                'description' => $event->note,
                'date' => $date,
                'start_time' => $startTime,
                'end_time' => $endTime,
                'room_name' => $event->room_name,
                'color' => $event->color ?? 'bg-pink-500', // Sử dụng màu từ database, fallback về màu mặc định
                'course_name' => $event->course->name ?? 'N/A',
            ];
        });
    }

    /**
     * Xử lý khi click vào ngày
     */
    public function onDayClick($year, $month, $day) {}

    /**
     * Xử lý khi click vào sự kiện
     */
    public function onEventClick($eventId)
    {
        $event = app(TimeTableRepositoryInterface::class)->getById($eventId);

        $this->courseName = $event->course->name;
        $this->startTime = $event->start_time->format('H:i');
        $this->endTime = $event->end_time->format('H:i');
        $this->roomName = $event->room_name;
        $this->eventColor = $event->color ?? 'bg-pink-500';
        $this->eventName = $event->name;

        $course = Course::with(['users.roles'])->find($event->course_id);

        $classTeachers = $course->users
            ->filter(function ($user) {
                return $user->roles->pluck('name')->intersect(['TEACHER', 'BOD'])->isNotEmpty();
            });

        // Lấy tên giáo viên đầu tiên
        $this->teacherName = $classTeachers->first()?->name;

        Flux::modal('view-event')->show();
    }

    /**
     * Xử lý khi kéo thả sự kiện
     */
    public function onEventDropped($eventId, $year, $month, $day) {}
}

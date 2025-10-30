<?php

namespace App\Livewire\Back\General\Course;


use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Support\TimeTable\TimeTableHelper;
use App\Repositories\Contracts\TimeTableRepositoryInterface;

#[Title('Lịch dạy hôm nay')]
class ScheduleCourses extends Component
{
    public $schedules = [];
    public $todaySchedules = [];

    public function mount()
    {
        $this->loadTodaySchedules();
    }

    public function loadTodaySchedules()
    {
        $schedules = app(TimeTableRepositoryInterface::class)->getTodaySchedulesByAuthId();
        
        // Kiểm tra xem đã có điểm danh chưa và chuyển thành array
        $schedulesArray = [];
        foreach ($schedules as $schedule) {
            $hasAttendance = \App\Models\Attendance::where('class_schedule_id', $schedule['id'])->exists();
            $schedule['has_attendance'] = $hasAttendance;
            $schedulesArray[] = $schedule;
            
        }
        
        $this->todaySchedules = $schedulesArray;
    }

    public function getShiftIconColor($shift)
    {
        return TimeTableHelper::getShiftIconColor($shift);
    }

    public function getShiftIconTextColor($shift)
    {
        return TimeTableHelper::getShiftIconTextColor($shift);
    }

    public function attendance($scheduleId, $action)
    {
        $this->dispatch('attendance', $scheduleId, $action);
    }

    #[On('attendance-updated')]
    public function refreshSchedules()
    {
        $this->loadTodaySchedules();
    }

    public function render()
    {
        return view('livewire.back.general.course.schedule-courses');
    }
}

<?php

namespace App\Livewire\Back\General\Dashboard;

use App\Models\User;
use Livewire\Component;
use App\Models\Attendance;
use App\Models\ClassSchedule;
use Illuminate\Support\Facades\Auth;

class ChartAttendance extends Component
{
    public $labels = [];
    public $data = [];
    public $present = 0;
    public $absent = 0;
    public $total = 0;

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $user = User::with('courses')->find(Auth::id());

        $lastCourseId = $user->courses->last()?->id;

        // Lấy danh sách schedule_id
        $classScheduleIds = ClassSchedule::where('course_id', $lastCourseId)->pluck('id');

        $this->present = Attendance::where('student_id', $user->id)
            ->where('status', 'present')
            ->whereIn('class_schedule_id', $classScheduleIds)
            ->count();

        $this->absent = Attendance::where('student_id', $user->id)
            ->where('status', 'absent')
            ->whereIn('class_schedule_id', $classScheduleIds)
            ->count();

        $this->total = $classScheduleIds->count();

        $this->labels = ['Có mặt ' . $this->present, 'Vắng ' . $this->absent, 'Tổng ' . $this->total];
        $this->data   = [$this->present, $this->absent, $this->total];
    }

    public function render()
    {
        $this->loadData();
        return view('livewire.back.general.dashboard.chart-attendance');
    }
}

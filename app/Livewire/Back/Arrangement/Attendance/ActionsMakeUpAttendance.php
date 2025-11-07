<?php

namespace App\Livewire\Back\Arrangement\Attendance;

use Flux\Flux;
use Livewire\Component;
use App\Models\Attendance;
use Livewire\Attributes\On;
use App\Models\ClassSchedule;

class ActionsMakeUpAttendance extends Component
{
    public $students;
    public $teachers;
    public ?ClassSchedule $schedule = null;
    public $attendances = []; // ✅ cần có để lưu trạng thái từng học viên

    public $date;
    public $checked_by;
    public $currentStatus = 'present';
    public $currentNote;

    public function mount()
    {
        $this->students = collect();
        $this->teachers = collect();
        $this->schedule = null;
        $this->attendances = [];
    }

    public function render()
    {
        return view('livewire.back.arrangement.attendance.actions-make-up-attendance');
    }

    #[On('make-up-attendance')]
    public function makeUpAttendance($id)
    {
        // Lấy thông tin lịch học
        $this->schedule = ClassSchedule::with(['course.users.roles'])->findOrFail($id);
        $this->date = $this->schedule->date;

        // Lấy toàn bộ người trong khóa học
        $members = $this->schedule->course?->users ?? collect();

        // Học viên
        $this->students = $members->filter(
            fn($u) => $u->roles->contains('name', 'STUDENT')
        )->values();

        // Giáo viên hoặc BOD
        $this->teachers = $members->filter(
            fn($u) => $u->roles->pluck('name')->intersect(['TEACHER', 'BOD'])->isNotEmpty()
        )->values();

        // ✅ Load dữ liệu điểm danh cũ (nếu có)
        $existing = Attendance::where('class_schedule_id', $this->schedule->id)
            ->get()
            ->keyBy('student_id');

        $this->attendances = [];
        foreach ($this->students as $student) {
            $this->attendances[$student->id] = [
                'status' => $existing[$student->id]['status'] ?? 'present',
                'note'   => $existing[$student->id]['note'] ?? '',
            ];
        }

        Flux::modal('make-up-attendance')->show();
    }

    public function updateAttendance($studentId, $status)
    {
        // Cập nhật trạng thái trong mảng attendances
        if (isset($this->attendances[$studentId])) {
            $this->attendances[$studentId]['status'] = $status;
        }
    }

    public function saveMakeUpAttendance()
    {

        $this->validate([
            'checked_by' => 'required'
        ],[
            'checked_by.required' => 'Hãy chọn giáo viên'
        ]);

        foreach ($this->students as $student) {
            $status = $this->attendances[$student->id]['status'] ?? 'present';
            $note = $this->attendances[$student->id]['note'] ?? '';

            Attendance::updateOrCreate(
                [
                    'class_schedule_id' => $this->schedule->id,
                    'student_id'        => $student->id,
                ],
                [
                    'checked_by' => $this->checked_by,
                    'date'       => $this->schedule->date,
                    'status'     => $status,
                    'note'       => $note,
                    'attendance_type' => 'makeup'
                ]
            );
        }
        session()->flash('success', 'Đã lưu điểm danh thành công!');
        // ✅ Đóng modal + thông báo
        Flux::modal('make-up-attendance')->close();
        $this->redirectRoute('admin.arrangement.make-up-attendance', navigate: true);
    }
}

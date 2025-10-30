<?php

namespace App\Livewire\Back\General\Course;

use App\Models\User;
use App\Models\Course;
use App\Models\ClassSchedule;
use App\Models\Attendance;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\CourseRepositoryInterface;

class AttendanceStudents extends Component
{
    public $scheduleId = null;
    public $classSchedule = null;
    public $students = [];
    public $attendances = [];
    public $showModal = false;
    public $action = null;

    public function render()
    {
        return view('livewire.back.general.course.attendance-students');
    }

    #[On('attendance')]
    public function attendance($scheduleId, $action)
    {
        $this->scheduleId = $scheduleId;
        $this->action = $action;
        $this->loadAttendanceData();
        $this->showModal = true;
    }

    protected function loadAttendanceData()
    {
        // Lấy thông tin lịch học
        $this->classSchedule = ClassSchedule::with(['course', 'course.subject'])
            ->find($this->scheduleId);

        if (!$this->classSchedule) {
            return;
        }

        // Lấy danh sách học viên của lớp
        $this->students = app(CourseRepositoryInterface::class)
            ->getClassStudentsByCourseId($this->classSchedule->course_id);

        // Lấy dữ liệu điểm danh hiện tại
        $existingAttendances = Attendance::where('class_schedule_id', $this->scheduleId)
            ->get()
            ->keyBy('student_id')
            ->toArray();

        // Khởi tạo dữ liệu cho tất cả học viên
        $this->attendances = [];
        foreach ($this->students as $student) {
            $status = $existingAttendances[$student->id]['status'] ?? 'present';
        
            $this->attendances[$student->id] = [
                'status' => $status,
                'note'   => $existingAttendances[$student->id]['note'] ?? '',
                'student_care_status' => $status === 'absent'
                    ? ($existingAttendances[$student->id]['student_care_status'] ?? 'not_contact')
                    : null,
            ];
        }
        
    }

    public function updateAttendance($studentId, $status)
    {
        // Cập nhật trạng thái trong mảng attendances
        if (isset($this->attendances[$studentId])) {
            $this->attendances[$studentId]['status'] = $status;
        }
    }

    public function updateAttendanceNote($studentId, $note)
    {
        $attendance = Attendance::where('class_schedule_id', $this->scheduleId)
            ->where('student_id', $studentId)
            ->first();

        if ($attendance) {
            // Cập nhật ghi chú
            $attendance->update([
                'note' => $note
            ]);
        } else {
            // Tạo điểm danh mới với ghi chú
            Attendance::create([
                'class_schedule_id' => $this->scheduleId,
                'student_id' => $studentId,
                'date' => $this->classSchedule->date,
                'status' => 'present', // Mặc định có mặt
                'note' => $note
            ]);
        }

        // Reload dữ liệu
        $this->loadAttendanceData();
    }

    public function saveAllAttendance()
    {
        // Lưu tất cả thay đổi điểm danh
        foreach ($this->students as $student) {
            $attendance = Attendance::where('class_schedule_id', $this->scheduleId)
                ->where('student_id', $student->id)
                ->first();

            $status = $this->attendances[$student->id]['status'] ?? 'present';
            $note = $this->attendances[$student->id]['note'] ?? '';

            if ($attendance) {
                // Cập nhật điểm danh hiện có
                $attendance->update([
                    'status' => $status,
                    'note' => $note,
                    'checked_by' => auth()->id(),
                    'date' => $this->classSchedule->date
                ]);
            } else {
                // Tạo điểm danh mới
                Attendance::create([
                    'class_schedule_id' => $this->scheduleId,
                    'student_id' => $student->id,
                    'checked_by' => auth()->id(),
                    'date' => $this->classSchedule->date,
                    'status' => $status,
                    'note' => $note
                ]);
            }
        }

        // Reload dữ liệu
        $this->loadAttendanceData();
        session()->flash('success', 'Đã lưu điểm danh thành công!');
        
        // Dispatch event để cập nhật danh sách lịch học
        $this->dispatch('attendance-updated');
        
        $this->redirectRoute('admin.general.management-course', navigate: true);
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->scheduleId = null;
        $this->classSchedule = null;
        $this->students = [];
        $this->attendances = [];
    }
}

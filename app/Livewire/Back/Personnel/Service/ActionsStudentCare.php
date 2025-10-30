<?php

namespace App\Livewire\Back\Personnel\Service;

use Flux\Flux;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Attendance;
use Livewire\Attributes\On;
use App\Models\StudentCareHistory;
use Illuminate\Support\Facades\Auth;
use App\Support\Validation\StudentCareRules;

class ActionsStudentCare extends Component
{

    public $attendanceId = null;

    public $status = 'no_answer', $parent_response, $note;
    public $studentName;
    public $studentCourseName;

    public function resetForm()
    {
        $this->reset([
            'parent_response',
            'note',
        ]);
    }

    public function rules()
    {
        return StudentCareRules::rules();
    }

    public function messages()
    {
        return StudentCareRules::messages();
    }

    #[On('show-student-care-modal')]
    public function showStudentCareModal($attendanceId)
    {
        $this->resetForm();
        $this->attendanceId = $attendanceId;
        $attendance = Attendance::with(['student', 'classSchedule.course'])->find($attendanceId);

        $start_time = \Carbon\Carbon::parse($attendance->classSchedule->start_time);
        $now = now();

        if ($now->lt($start_time->addMinutes(30))) {
            session()->flash('error', 'Chỉ thực hiện cuộc gọi chăm sau sau 30phút.');
            $this->redirectRoute('admin.personnel.student-care', navigate: true);
            return;
        }


        $this->studentName = $attendance?->student?->name;
        $this->studentCourseName = $attendance?->classSchedule?->course?->name;

        Flux::modal('modal-service-student-care')->show();
    }

    public function createStudentCare()
    {
        $this->validate();
        $studentCareHistory = StudentCareHistory::create([
            'attendance_id' => $this->attendanceId,
            'implementer_id' => Auth::user()->id,
            'status' => $this->status,
            'parent_response' => $this->parent_response,
            'note' => $this->note,
        ]);


        Attendance::where('id', $this->attendanceId)->update([
            'student_care_status' => $this->status,
        ]);


        if ($studentCareHistory) {
            session()->flash('success', 'Thêm lịch sử chăm sóc học viên thành công.');
        } else {
            session()->flash('error', 'Thêm lịch sử chăm sóc học viên thất bại.');
        }
        Flux::modal('modal-service-student-care')->close();
        $this->redirectRoute('admin.personnel.student-care', navigate: true);
    }

    public function render()
    {
        return view('livewire.back.personnel.service.actions-student-care');
    }
}

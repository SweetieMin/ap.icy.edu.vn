<?php

namespace App\Livewire\Back\Personnel\Service;

use Livewire\Component;
use App\Models\Attendance;

class AbsentStudents extends Component
{
    public $listStudents = [];
    public $courses = [];
    public $filterCourseId = '';
    public $search = '';
    public $filterStatus = '';

    public function mount()
    {
        $this->getAbsences();
        $this->getCourses();
    }

    protected function getAbsences(array $filters = [])
    {
        $selectedCourseId = $filters['course_id'] ?? $this->filterCourseId;
        $searchKeyword = $filters['search'] ?? $this->search;
        $selectedStatus = $filters['status'] ?? $this->filterStatus;

        $this->listStudents = Attendance::with([
            'studentCareHistories',
            'classSchedule',
            'classSchedule.course',
            'student.detail',
        ])
            ->where('status', 'absent')
            ->when($selectedCourseId, function ($query, $selectedCourseId) {
                $query->whereHas('classSchedule', function ($q) use ($selectedCourseId) {
                    $q->where('course_id', $selectedCourseId);
                });
            })
            ->when($searchKeyword, function ($query, $searchKeyword) {
                $query->whereHas('student', function ($q) use ($searchKeyword) {
                    $q->where(function ($q2) use ($searchKeyword) {
                        $q2->where('name', 'like', "%{$searchKeyword}%")
                            ->orWhere('account_code', 'like', "%{$searchKeyword}%");
                    });
                });
            })
            ->when($selectedStatus, function ($query, $selectedStatus) {
                $query->whereHas('classSchedule', function ($q) use ($selectedStatus) {
                    $q->where('student_care_status', $selectedStatus);
                });
            })
            ->orderByDesc('date')
            ->orderByRaw("FIELD(student_care_status, 'not_contact', 'no_answer', 'success')")
            ->get();
    }

    public function updatedFilterCourseId()
    {
        $this->getAbsences();
    }

    public function updatedSearch()
    {
        $this->getAbsences();
    }

    public function updatedFilterStatus()
    {
        $this->getAbsences();
    }

    public function showStudentCareModal($attendanceId)
    {
        $this->dispatch('show-student-care-modal', attendanceId: $attendanceId);
    }

    protected function getCourses()
    {
        $courses = Attendance::with(['classSchedule.course'])
                              ->where('status', 'absent')
                              ->get()
                              ->pluck('classSchedule.course')
                              ->filter();

        // Lọc trùng theo id và reset key
        $this->courses = $courses->unique('id')->values();
    }

    public function render()
    {
        return view('livewire.back.personnel.service.absent-students');
    }
}

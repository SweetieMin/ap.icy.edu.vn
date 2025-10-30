<?php

namespace App\Livewire\Back\Personnel\Service;

use Livewire\Component;
use App\Models\Attendance;
use App\Models\StudentCareHistory;

class StudentsCareHistory extends Component
{

    public $courses = [];
    public $filterCourseId = '';
    public $search = '';
    public $studentsCareHistory = [];
    public $selectedCourseId = '';
    public $searchKeyword = '';

    public function mount()
    {
        $this->getCourses();
        $this->getStudentsCareHistory();
    }

    protected function getStudentsCareHistory()
    {
        $selectedCourseId = $filters['course_id'] ?? $this->filterCourseId;
        $searchKeyword = $filters['search'] ?? $this->search;

        $this->studentsCareHistory = StudentCareHistory::with(['attendance.classSchedule.course', 'attendance.student', 'implementer'])
            ->when($selectedCourseId, function ($query, $selectedCourseId) {
                $query->whereHas('attendance.classSchedule', function ($q) use ($selectedCourseId) {
                    $q->where('course_id', $selectedCourseId);
                });
            })
            ->when($searchKeyword, function ($query, $searchKeyword) {
                $query->whereHas('attendance.student', function ($q) use ($searchKeyword) {
                    $q->where(function ($q2) use ($searchKeyword) {
                        $q2->where('name', 'like', "%{$searchKeyword}%")
                            ->orWhere('account_code', 'like', "%{$searchKeyword}%");
                    });
                });
            })
            ->orderByDesc('created_at')
            ->get();
    }

    public function updatedFilterCourseId()
    {
        $this->getStudentsCareHistory();
    }

    public function updatedSearch()
    {
        $this->getStudentsCareHistory();
    }

    protected function getCourses()
    {
        $courses = StudentCareHistory::with(['attendance.classSchedule.course'])
            ->get()
            ->pluck('attendance.classSchedule.course')
            ->filter();

        // Lọc trùng theo id và reset key
        $this->courses = $courses->unique('id')->values();
    }

    public function render()
    {
        return view('livewire.back.personnel.service.students-care-history');
    }
}

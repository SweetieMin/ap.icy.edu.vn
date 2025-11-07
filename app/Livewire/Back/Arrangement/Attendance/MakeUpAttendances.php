<?php

namespace App\Livewire\Back\Arrangement\Attendance;

use App\Models\User;
use Livewire\Component;
use App\Models\ClassSchedule;
use Livewire\Attributes\Title;
use Flux\DateRange;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TeacherAttendanceSummaryExport;

#[Title('QL Điểm danh')]
class MakeUpAttendances extends Component
{
    use WithPagination;

    public ?DateRange $range = null;
    public $selectedTeacher = null;

    public $page = 10;

    public function updatedSelectedTeacher($value)
    {
        $this->selectedTeacher = $value;
    }

    public function updatedRange($value)
    {
        $this->range = $value;
    }


    public function updatedPage($value)
    {
        $this->page = $value;
    }


    public function render()
    {
        $query = ClassSchedule::with(['course.users', 'createdBy', 'attendances'])
            ->whereDate('date', '<=', now()->toDateString())
            ->when($this->selectedTeacher, function ($query) {
                $query->whereHas('attendances', function ($q) {
                    $q->where('checked_by', $this->selectedTeacher);
                });
            })
            ->when($this->range && ($this->range->start || $this->range->end), function ($query) {
                $query->whereHas('attendances', function ($q) {
                    if ($this->range->start && $this->range->end) {
                        $q->whereBetween('date', [
                            $this->range->start->toDateString(),
                            $this->range->end->toDateString(),
                        ]);
                    } elseif ($this->range->end) {
                        $q->whereDate('date', '<=', $this->range->end->toDateString());
                    } elseif ($this->range->start) {
                        $q->whereDate('date', '>=', $this->range->start->toDateString());
                    }
                });
            })
            ->orderBy('date', 'desc');

        // ✅ Nếu có chọn "Tất cả" thì lấy toàn bộ, ngược lại phân trang
        $schedules = $this->page
            ? $query->paginate($this->page)
            : $query->get();

        $teachers = User::whereHas(
            'roles',
            fn($q) =>
            $q->whereIn('name', ['TEACHER', 'BOD'])
        )->with('roles')->get();

        return view('livewire.back.arrangement.attendance.make-up-attendances', [
            'schedules' => $schedules,
            'teachers'  => $teachers,
        ]);
    }

    public function exportData()
    {
        $start = $this->range?->start?->format('Y-m-d') ?? null;
        $end   = $this->range?->end?->format('Y-m-d') ?? now()->format('Y-m-d');

        $fileName = "TeacherAttendanceSummaryExport-{$start}-{$end}.xlsx";

        return Excel::download(
            new TeacherAttendanceSummaryExport($start, $end),
            $fileName
        );
    }

    public function makeUpAttendance($id)
    {
        $this->dispatch('make-up-attendance', $id);
    }
}

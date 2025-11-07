<?php

namespace App\Exports;

use App\Models\ClassSchedule;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Illuminate\Support\Collection;

class TeacherAttendanceSummaryExport implements WithMultipleSheets
{
    protected $start;
    protected $end;

    public function __construct($start = null, $end = null)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function sheets(): array
    {
        // Lấy dữ liệu theo khoảng ngày
        $query = ClassSchedule::with(['course', 'attendances.checker', 'createdBy'])
            ->whereDate('date', '<=', now()->toDateString())
            ->when($this->start || $this->end, function ($query) {
                $query->whereHas('attendances', function ($q) {
                    if ($this->start && $this->end) {
                        $q->whereBetween('date', [$this->start, $this->end]);
                    } elseif ($this->end) {
                        $q->whereDate('date', '<=', $this->end);
                    } elseif ($this->start) {
                        $q->whereDate('date', '>=', $this->start);
                    }
                });
            })
            ->orderBy('date')
            ->get();


        // Nhóm theo giáo viên (checker)
        $grouped = $query->groupBy(function ($item) {
            return $item->attendances->first()?->checker->name ?? 'Không điểm danh';
        });

        $sheets = [];

        /**
         * 1️⃣ Sheet đầu tiên: Tổng hợp tất cả
         */
        $sheets[] = new TeacherAttendanceSheet('Tổng hợp', $query);

        /**
         * 2️⃣ Sheet "Không điểm danh" (nếu có)
         */
        if ($grouped->has('Không điểm danh')) {
            $sheets[] = new TeacherAttendanceSheet('Không điểm danh', $grouped->get('Không điểm danh'));
            $grouped->forget('Không điểm danh');
        }

        /**
         * 3️⃣ Các sheet còn lại: mỗi giáo viên 1 sheet
         */
        foreach ($grouped as $teacherName => $records) {
            $sheets[] = new TeacherAttendanceSheet($teacherName, $records);
        }

        return $sheets;
    }
}

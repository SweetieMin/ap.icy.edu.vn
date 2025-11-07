<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class TeacherAttendanceSheet implements FromCollection, WithHeadings, ShouldAutoSize, WithTitle, WithEvents
{
    protected $title;
    protected $records;

    public function __construct($title, Collection $records)
    {
        $this->title = $title;
        $this->records = $records;
    }

    public function collection()
    {
        return $this->records->map(function ($item) {
            $formattedDate = $item->date
                ? Carbon::parse($item->date)->format('d/m/Y')
                : 'N/A';

            return [
                'date'         => $formattedDate,
                'class_name'   => $item->course->name ?? 'N/A',
                'teacher_name' => $item->attendances->first()?->checker->name ?? '-',
                'official'     => $item->attendances->first()?->attendance_type === 'official' ? 'X' : '',
                'makeup'       => $item->attendances->first()?->attendance_type === 'makeup' ? 'X' : '',
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Ngày học',
            'Tên lớp',
            'Giáo viên điểm danh',
            'Điểm danh đúng giờ',
            'Điểm danh bù',
        ];
    }

    public function title(): string
    {
        return mb_strimwidth($this->title, 0, 31, '');
    }

    /** ✅ Thêm hàng tổng ở cuối */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet      = $event->sheet;
                $rowCount   = $this->records->count() + 2; // +1 heading, +1 dòng tổng

                // Đếm số official và makeup
                $officialCount = $this->records->filter(fn($i) => $i->attendances->first()?->attendance_type === 'official')->count();
                $makeupCount   = $this->records->filter(fn($i) => $i->attendances->first()?->attendance_type === 'makeup')->count();

                // Merge 3 ô đầu
                $sheet->mergeCells("A{$rowCount}:C{$rowCount}");
                $sheet->setCellValue("A{$rowCount}", 'TỔNG:');
                $sheet->setCellValue("D{$rowCount}", $officialCount);
                $sheet->setCellValue("E{$rowCount}", $makeupCount);

                // Tô đậm hàng tổng
                $sheet->getStyle("A{$rowCount}:E{$rowCount}")->applyFromArray([
                    'font' => ['bold' => true],
                ]);
            },
        ];
    }
}

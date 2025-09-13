<?php

namespace App\Livewire\Back\Arrangement;

use Flux\Flux;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Title;
use Illuminate\Support\Collection;
use Omnia\LivewireCalendar\LivewireCalendar;
use App\Repositories\Contracts\CourseRepositoryInterface;

#[Title('Sắp xếp lịch học')]
class Timetable extends LivewireCalendar
{
    public $modalSetup = 'vendor.livewire-calendar.modal-time-table';
    public $selectedDate;
    public $eventTitle = '';
    public $eventDescription = '';
    public $eventColor = 'bg-pink-500';
    public $selectedCourseId = '';
    public $availableCourses = [];
    public $startTime = '';
    public $endTime = '';
    public $roomName = '';

    public function afterMount($extras = [])
    {
        $this->modalSetup = $extras['modalSetup'] ?? 'vendor.livewire-calendar.modal-time-table';
        $this->loadAvailableCourses();
    }

    /**
     * Lấy danh sách lớp có season đang diễn ra hoặc sắp diễn ra
     */
    public function loadAvailableCourses()
    {
        $this->availableCourses = app(CourseRepositoryInterface::class)->getCoursesWithActiveSeasons();
    }

    public function events(): Collection
    {
        return collect([
            [
                'id' => 1,
                'title' => 'Lịch hẹn học viên A',
                'description' => 'Buổi học lập trình PHP',
                'date' => Carbon::today(),
                'color' => 'bg-pink-500',
            ],
        ]);
    }

    /**
     * Xử lý khi click vào ngày
     */
    public function onDayClick($year, $month, $day) {
        $this->selectedDate = Carbon::createFromDate($year, $month, $day);
        $this->reset(['eventTitle', 'eventDescription', 'selectedCourseId', 'startTime', 'endTime', 'roomName']);
        $this->eventColor = 'bg-pink-500';
        Flux::modal('add-event')->show();
    }

    /**
     * Lưu sự kiện mới
     */
    public function saveEvent()
    {
        $this->validate([
            'eventTitle' => 'required|string|max:255',
            'eventDescription' => 'nullable|string|max:500',
            'selectedCourseId' => 'required|exists:courses,id',
            'startTime' => 'required|date_format:H:i',
            'endTime' => 'required|date_format:H:i|after:startTime',
            'roomName' => 'nullable|string|max:100',
        ], [
            'eventTitle.required' => 'Tiêu đề sự kiện không được để trống.',
            'eventTitle.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'eventDescription.max' => 'Mô tả không được vượt quá 500 ký tự.',
            'selectedCourseId.required' => 'Vui lòng chọn lớp học.',
            'selectedCourseId.exists' => 'Lớp học không tồn tại.',
            'startTime.required' => 'Vui lòng chọn giờ bắt đầu.',
            'startTime.date_format' => 'Giờ bắt đầu không đúng định dạng.',
            'endTime.required' => 'Vui lòng chọn giờ kết thúc.',
            'endTime.date_format' => 'Giờ kết thúc không đúng định dạng.',
            'endTime.after' => 'Giờ kết thúc phải sau giờ bắt đầu.',
            'roomName.max' => 'Tên phòng học không được vượt quá 100 ký tự.',
        ]);

        dd($this->all());

        // TODO: Lưu vào database
        // Event::create([
        //     'title' => $this->eventTitle,
        //     'description' => $this->eventDescription,
        //     'date' => $this->selectedDate,
        //     'color' => $this->eventColor,
        // ]);

        session()->flash('success', 'Sự kiện đã được thêm thành công!');
        $this->closeModal();
        $this->redirectRoute('admin.arrangement.time-table', navigate: true);
    }

    /**
     * Đóng modal
     */
    public function closeModal()
    {
        Flux::modal('add-event')->close();
        $this->reset(['eventTitle', 'eventDescription', 'selectedDate', 'selectedCourseId', 'startTime', 'endTime', 'roomName']);
    }

    /**
     * Xử lý khi click vào sự kiện
     */
    public function onEventClick($eventId) {}

    /**
     * Xử lý khi kéo thả sự kiện
     */
    public function onEventDropped($eventId, $year, $month, $day)
    {
        $date = Carbon::createFromDate($year, $month, $day);
        session()->flash('success', "Sự kiện đã được di chuyển đến ngày: " . $date->format('d/m/Y'));
        $this->redirectRoute('admin.arrangement.time-table', navigate: true);
    }
}

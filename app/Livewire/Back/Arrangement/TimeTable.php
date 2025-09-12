<?php

namespace App\Livewire\Back\Arrangement;

use Flux\Flux;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Title;
use Illuminate\Support\Collection;
use Omnia\LivewireCalendar\LivewireCalendar;

#[Title('Sắp xếp lịch học')]
class Timetable extends LivewireCalendar
{
    public $modalSetup = 'vendor.livewire-calendar.modal-time-table';
    public $selectedDate;
    public $eventTitle = '';
    public $eventDescription = '';
    public $eventColor = 'bg-pink-500';

    public function afterMount($extras = [])
    {
        $this->modalSetup = $extras['modalSetup'] ?? 'vendor.livewire-calendar.modal-time-table';
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
        $this->reset(['eventTitle', 'eventDescription']);
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
        ], [
            'eventTitle.required' => 'Tiêu đề sự kiện không được để trống.',
            'eventTitle.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'eventDescription.max' => 'Mô tả không được vượt quá 500 ký tự.',
        ]);

        // TODO: Lưu vào database
        // Event::create([
        //     'title' => $this->eventTitle,
        //     'description' => $this->eventDescription,
        //     'date' => $this->selectedDate,
        //     'color' => $this->eventColor,
        // ]);

        session()->flash('success', 'Sự kiện đã được thêm thành công!');
        $this->closeModal();
    }

    /**
     * Đóng modal
     */
    public function closeModal()
    {
        Flux::modal('add-event')->close();
        $this->reset(['eventTitle', 'eventDescription', 'selectedDate']);
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

<?php

namespace App\Livewire\Back\Dashboard;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Title;
use Illuminate\Support\Collection;
use Omnia\LivewireCalendar\LivewireCalendar;

#[Title('Lịch học')]
class Timetable extends LivewireCalendar
{
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
            [
                'id' => 2,
                'title' => 'Lịch hẹn học viên B',
                'description' => 'Buổi học JavaScript',
                'date' => Carbon::tomorrow(),
                'color' => 'bg-pink-600',
            ],
            [
                'id' => 3,
                'title' => 'Lịch hẹn học viên C',
                'description' => 'Buổi học Laravel',
                'date' => Carbon::today()->addDays(3),
                'color' => 'bg-pink-400',
            ],
            [
                'id' => 4,
                'title' => 'Kiểm tra giữa kỳ',
                'description' => 'Kiểm tra kiến thức học viên',
                'date' => Carbon::today()->addDays(7),
                'color' => 'bg-pink-700',
            ],
            [
                'id' => 5,
                'title' => 'Họp phụ huynh',
                'description' => 'Báo cáo tình hình học tập',
                'date' => Carbon::today()->addDays(10),
                'color' => 'bg-pink-300',
            ],
        ]);
    }

    /**
     * Xử lý khi click vào ngày
     */
    public function onDayClick($year, $month, $day)
    {
        $date = Carbon::createFromDate($year, $month, $day);
        
    }

    /**
     * Xử lý khi click vào sự kiện
     */
    public function onEventClick($eventId)
    {
        $event = $this->events()->firstWhere('id', $eventId);
        if ($event) {
            session()->flash('success', "Sự kiện: " . $event['title'] . " - " . ($event['description'] ?? ''));
            $this->redirectRoute('dashboard');
        }
    }

    /**
     * Xử lý khi kéo thả sự kiện
     */
    public function onEventDropped($eventId, $year, $month, $day)
    {
        $date = Carbon::createFromDate($year, $month, $day);
        session()->flash('message', "Sự kiện đã được di chuyển đến ngày: " . $date->format('d/m/Y'));
    }

}

<?php

namespace App\Livewire\Back\General\Dashboard;

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
            
        ]);
    }

    /**
     * Xử lý khi click vào ngày
     */
    public function onDayClick($year, $month, $day)
    {

    }

    /**
     * Xử lý khi click vào sự kiện
     */
    public function onEventClick($eventId)
    {

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


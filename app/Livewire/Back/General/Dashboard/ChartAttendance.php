<?php

namespace App\Livewire\Back\General\Dashboard;

use Livewire\Component;

class ChartAttendance extends Component
{
    public $labels = [];
    public $data = [];
    public $present = 0;
    public $absent = 0;
    public $total = 0;

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $this->present = 1;
        $this->absent = 1;
        $this->total = 24;

        $this->labels = [
            'Có mặt',
            'Vắng mặt',
            'Tổng số buổi'

        ];
        $this->data = [$this->present, $this->absent, $this->total];
    }
    
    public function render()
    {
        $this->loadData();
        return view('livewire.back.general.dashboard.chart-attendance');
    }
}

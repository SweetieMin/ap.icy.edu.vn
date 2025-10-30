<?php

namespace App\Livewire\Back\General\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('components.layouts.app')]
#[Title('Bảng điều khiển')]
class LayoutDashboard extends Component
{
    public $isShowChartAttendance = false;

    public function mount()
    {
        $user = Auth::user();
        if($user->hasRole('STUDENT')){
            $this->isShowChartAttendance = true;
        }
    }

    public function render()
    {
        return view('livewire.back.general.dashboard.layout-dashboard');
    }
}

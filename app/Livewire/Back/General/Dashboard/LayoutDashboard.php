<?php

namespace App\Livewire\Back\General\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]
#[Title('Bảng điều khiển')]
class LayoutDashboard extends Component
{
    public function render()
    {
        return view('livewire.back.general.dashboard.layout-dashboard');
    }
}

<?php

namespace App\Livewire\Back\Personnel\Service;

use Livewire\Component;
use App\Models\Attendance;
use Livewire\Attributes\Title;
// use App\Repositories\Contracts\UserRepositoryInterface;

#[Title('Chăm sóc học viên')]

class StudentsCareLayout extends Component
{
    public $activeTab = 'absences';
    public $listStudents = [];

    protected $queryString = [
        'activeTab' => ['keep' => true],
    ];

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function mount()
    {
        if (!in_array($this->activeTab, ['absences', 'history'])) {
            $this->activeTab = 'absences';
        }
   }
    
    public function render()
    {
        return view('livewire.back.personnel.service.students-care-layout');
    }
}

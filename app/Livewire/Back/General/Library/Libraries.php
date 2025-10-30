<?php

namespace App\Livewire\Back\General\Library;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Contracts\SubjectRepositoryInterface;

#[Title('Thư viện')]
class Libraries extends Component
{

    public $libraries;

    public function mount()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $subjectIds = $user->courses()->pluck('subject_id')->toArray();
        $this->libraries = app(SubjectRepositoryInterface::class)->getSubjectsByIds($subjectIds);
    }

    public function render()
    {
        return view('livewire.back.general.library.libraries', [
            'libraries' => $this->libraries,
        ]);
    }
}

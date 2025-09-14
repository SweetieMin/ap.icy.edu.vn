<?php

namespace App\Livewire\Back\Finance\Bank;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Repositories\Contracts\BankRepositoryInterface;
use Illuminate\Support\Facades\Cache;

#[Title('Tài khoản ngân hàng')]
class AccountsBank extends Component
{
    use WithPagination;
    
    public $qrString;
    public $perPage = 10;

    public function addBank()
    {
        $this->dispatch('add-bank');
    }

    public function editBank($id)
    {
        $this->dispatch('edit-bank', $id);
    }

    public function deleteBank($id)
    {
        $this->dispatch('delete-bank', $id);
    }

    public function render()
    {
        // Cache banks data for 5 minutes to improve performance
        $cacheKey = 'banks_paginated_' . $this->perPage . '_' . $this->getPage();
        
        $banks = Cache::remember($cacheKey, 300, function () {
            return app(BankRepositoryInterface::class)->getPaginated($this->perPage);
        });

        return view('livewire.back.finance.bank.accounts-bank', [
            'banks' => $banks,
        ]);
    }

    public function updatedPerPage()
    {
        $this->resetPage();
    }
}

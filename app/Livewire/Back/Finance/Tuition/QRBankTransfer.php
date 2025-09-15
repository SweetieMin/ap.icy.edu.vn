<?php

namespace App\Livewire\Back\Finance\Tuition;

use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Repositories\Contracts\TuitionRepositoryInterface;

class QRBankTransfer extends Component
{
    public $crc16 = '';
    public $bankName = '';
    public $accountNumber = '';
    public $amount = 0;
    public $contentTransaction = '';

    #[On('qr-bank-transfer')]
    public function qrBankTransfer($transactionId)
    {
        $transaction = app(TuitionRepositoryInterface::class)->getTuitionById($transactionId);
        $this->crc16 = $transaction->content_transaction;
        $this->bankName = $transaction->bank->bank_name;
        $this->accountNumber = $transaction->bank->account_number;
        $this->amount = $transaction->price;
        $this->contentTransaction = $transaction->content_transaction;
        Flux::modal('qr-bank-transfer')->show();
    }

    public function render()
    {
        return view('livewire.back.finance.tuition.qr-bank-transfer');
    }
}

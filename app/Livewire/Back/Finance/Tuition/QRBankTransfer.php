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
    public $transactionId = '';
    public $accountName = '';

    #[On('qr-bank-transfer')]
    public function qrBankTransfer($transactionId, $crc16)
    {
        $this->transactionId = $transactionId;
        $transaction = app(TuitionRepositoryInterface::class)->getTuitionById($transactionId);
        $this->crc16 = $crc16;
        $this->bankName = $transaction->bank->bank_name;
        $this->accountNumber = $transaction->bank->account_number;
        $this->accountName = $transaction->bank->account_name;
        $this->amount = $transaction->price;
        $this->contentTransaction = $transaction->content_transaction;
        Flux::modal('qr-bank-transfer')->show();
    }

    public function checkPaymentStatus()
    {
        if ($this->transactionId) {
            $transaction = app(TuitionRepositoryInterface::class)->getTuitionById($this->transactionId);
            if ($transaction->status === 'paid') {
                Flux::modal('qr-bank-transfer')->close();
                session()->flash('success', 'Thanh toán thành công');
                $this->redirectRoute('admin.finance.tuitions-payment', navigate: true);
            }
        }
    }

    public function render()
    {
        return view('livewire.back.finance.tuition.q-r-bank-transfer');
    }
}

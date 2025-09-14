<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class GoogleLoginButton extends Component
{
    public function redirectToGoogle()
    {
        return redirect()->route('auth.google');
    }

    public function render()
    {
        return view('livewire.auth.google-login-button');
    }
}

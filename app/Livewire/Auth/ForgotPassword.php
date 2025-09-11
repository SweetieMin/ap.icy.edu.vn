<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Services\EmailService;
use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Layout('components.layouts.auth')]
#[Title('Quên mật khẩu')]
class ForgotPassword extends Component
{
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        // Tìm user với email này
        $user = User::where('email', $this->email)->first();

        if ($user) {
            // Tạo token reset password
            $token = Password::getRepository()->create($user);
            
            // Gửi email sử dụng custom template
            $emailService = app(EmailService::class);
            $success = $emailService->sendPasswordReset($user, $token);
            
            if ($success) {
                session()->flash('status', 'Liên kết đặt lại mật khẩu đã được gửi đến email của bạn.');
            } else {
                session()->flash('error', 'Có lỗi xảy ra khi gửi email. Vui lòng thử lại sau.');
            }
        } else {
            // Không tìm thấy user, nhưng vẫn hiển thị thông báo thành công để bảo mật
            session()->flash('status', 'Nếu email tồn tại trong hệ thống, liên kết đặt lại mật khẩu sẽ được gửi đến email của bạn.');
        }
    }
}

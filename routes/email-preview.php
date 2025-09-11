<?php

use App\Models\User;
use App\Mail\VerifyEmailMail;
use App\Mail\ResetPasswordMail;
use App\Mail\WelcomeMail;
use App\Mail\NotificationMail;
use Illuminate\Support\Facades\Route;

// Route để preview email templates (chỉ dùng trong development)
if (app()->environment('local')) {
    Route::get('/email-preview/{template}', function ($template) {
        // Tạo user test
        $testUser = new User([
            'id' => 1,
            'name' => 'Nguyễn Văn A',
            'email' => 'test@example.com',
            'username' => 'testuser',
            'account_code' => 'TEST001',
        ]);

        switch ($template) {
            case 'verify':
                return view('emails.verify-email', [
                    'user' => $testUser,
                    'verificationUrl' => url('/verify-email/1/test-hash-123'),
                    'appName' => config('app.name'),
                    'appUrl' => config('app.url'),
                ]);
                
            case 'reset':
                return view('emails.reset-password', [
                    'user' => $testUser,
                    'resetUrl' => url('/password/reset/test-token-123?email=' . $testUser->email),
                    'appName' => config('app.name'),
                    'appUrl' => config('app.url'),
                ]);
                
            case 'welcome':
                return view('emails.welcome', [
                    'user' => $testUser,
                    'temporaryPassword' => 'TempPass123!',
                    'appName' => config('app.name'),
                    'appUrl' => config('app.url'),
                    'loginUrl' => route('login'),
                ]);
                
            case 'notification':
                return view('emails.notification', [
                    'user' => $testUser,
                    'title' => 'Thông báo quan trọng',
                    'message' => 'Đây là email thông báo hệ thống để kiểm tra giao diện template.',
                    'actionUrl' => route('dashboard'),
                    'actionText' => 'Truy cập hệ thống',
                    'appName' => config('app.name'),
                    'appUrl' => config('app.url'),
                ]);
                
            default:
                abort(404, 'Template not found');
        }
    })->name('email.preview');
}

<?php

namespace App\Services;

use App\Models\User;
use App\Mail\VerifyEmailMail;
use App\Mail\ResetPasswordMail;
use App\Mail\WelcomeMail;
use App\Mail\NotificationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class EmailService
{
    /**
     * Send email verification to user.
     */
    public function sendEmailVerification(User $user): bool
    {
        try {
            Mail::to($user->email)->send(new VerifyEmailMail($user));
            return true;
        } catch (\Exception $e) {
            logger()->error('Failed to send email verification: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Send password reset email to user.
     */
    public function sendPasswordReset(User $user, string $token): bool
    {
        try {
            // Gửi mail đồng bộ trong môi trường development
            if (app()->environment('local')) {
                Mail::to($user->email)->send(new ResetPasswordMail($user, $token));
            } else {
                Mail::to($user->email)->queue(new ResetPasswordMail($user, $token));
            }
            return true;
        } catch (\Exception $e) {
            logger()->error('Failed to send password reset email: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Send welcome email to new user.
     */
    public function sendWelcomeEmail(User $user, string $temporaryPassword = null): bool
    {
        try {
            Mail::to($user->email)->send(new WelcomeMail($user, $temporaryPassword));
            return true;
        } catch (\Exception $e) {
            logger()->error('Failed to send welcome email: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Send system notification email.
     */
    public function sendSystemNotification(
        User $user,
        string $title,
        string $message,
        string $actionUrl = null,
        string $actionText = null
    ): bool {
        try {
            Mail::to($user->email)->send(new NotificationMail(
                $user,
                $title,
                $message,
                $actionUrl,
                $actionText
            ));
            return true;
        } catch (\Exception $e) {
            logger()->error('Failed to send system notification: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Send bulk system notification to multiple users.
     */
    public function sendBulkSystemNotification(
        array $users,
        string $title,
        string $message,
        string $actionUrl = null,
        string $actionText = null
    ): array {
        $results = [
            'success' => 0,
            'failed' => 0,
            'errors' => []
        ];

        foreach ($users as $user) {
            if ($this->sendSystemNotification($user, $title, $message, $actionUrl, $actionText)) {
                $results['success']++;
            } else {
                $results['failed']++;
                $results['errors'][] = "Failed to send to {$user->email}";
            }
        }

        return $results;
    }

    /**
     * Send notification to users by role.
     */
    public function sendNotificationToRole(
        string $roleName,
        string $title,
        string $message,
        string $actionUrl = null,
        string $actionText = null
    ): array {
        $users = User::whereHas('roles', function ($query) use ($roleName) {
            $query->where('name', $roleName);
        })->where('status', 'active')->get();

        return $this->sendBulkSystemNotification($users, $title, $message, $actionUrl, $actionText);
    }

    /**
     * Send notification to users by location.
     */
    public function sendNotificationToLocation(
        int $locationId,
        string $title,
        string $message,
        string $actionUrl = null,
        string $actionText = null
    ): array {
        $users = User::whereHas('locations', function ($query) use ($locationId) {
            $query->where('location_id', $locationId);
        })->where('status', 'active')->get();

        return $this->sendBulkSystemNotification($users, $title, $message, $actionUrl, $actionText);
    }

    /**
     * Test email configuration.
     */
    public function testEmailConfiguration(string $testEmail): bool
    {
        try {
            Mail::to($testEmail)->send(new NotificationMail(
                new User(['name' => 'Test User', 'email' => $testEmail]),
                'Test Email Configuration',
                'Đây là email test để kiểm tra cấu hình email của hệ thống.',
                config('app.url'),
                'Truy cập hệ thống'
            ));
            return true;
        } catch (\Exception $e) {
            logger()->error('Email configuration test failed: ' . $e->getMessage());
            return false;
        }
    }
}

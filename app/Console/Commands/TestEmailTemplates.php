<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Services\EmailService;
use Illuminate\Console\Command;

class TestEmailTemplates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:test {email} {--template=all : Template to test (verify, reset, welcome, notification, all)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test email templates by sending them to a specified email address';

    /**
     * Execute the console command.
     */
    public function handle(EmailService $emailService)
    {
        $email = $this->argument('email');
        $template = $this->option('template');

        // Create a test user
        $testUser = new User([
            'name' => 'Test User',
            'email' => $email,
            'username' => 'testuser',
            'account_code' => 'TEST001',
        ]);

        $this->info("Testing email templates for: {$email}");
        $this->newLine();

        switch ($template) {
            case 'verify':
                $this->testVerifyEmail($emailService, $testUser);
                break;
            case 'reset':
                $this->testResetPassword($emailService, $testUser);
                break;
            case 'welcome':
                $this->testWelcomeEmail($emailService, $testUser);
                break;
            case 'notification':
                $this->testNotificationEmail($emailService, $testUser);
                break;
            case 'all':
            default:
                $this->testAllTemplates($emailService, $testUser);
                break;
        }

        $this->newLine();
        $this->info('Email template testing completed!');
    }

    private function testVerifyEmail(EmailService $emailService, User $testUser)
    {
        $this->info('Testing email verification template...');
        if ($emailService->sendEmailVerification($testUser)) {
            $this->info('✅ Email verification sent successfully!');
        } else {
            $this->error('❌ Failed to send email verification');
        }
    }

    private function testResetPassword(EmailService $emailService, User $testUser)
    {
        $this->info('Testing password reset template...');
        if ($emailService->sendPasswordReset($testUser, 'test-token-123')) {
            $this->info('✅ Password reset email sent successfully!');
        } else {
            $this->error('❌ Failed to send password reset email');
        }
    }

    private function testWelcomeEmail(EmailService $emailService, User $testUser)
    {
        $this->info('Testing welcome email template...');
        if ($emailService->sendWelcomeEmail($testUser, 'TempPass123!')) {
            $this->info('✅ Welcome email sent successfully!');
        } else {
            $this->error('❌ Failed to send welcome email');
        }
    }

    private function testNotificationEmail(EmailService $emailService, User $testUser)
    {
        $this->info('Testing system notification template...');
        if ($emailService->sendSystemNotification(
            $testUser,
            'Test Notification',
            'Đây là email test để kiểm tra template thông báo hệ thống.',
            config('app.url'),
            'Truy cập hệ thống'
        )) {
            $this->info('✅ System notification sent successfully!');
        } else {
            $this->error('❌ Failed to send system notification');
        }
    }

    private function testAllTemplates(EmailService $emailService, User $testUser)
    {
        $this->testVerifyEmail($emailService, $testUser);
        $this->newLine();
        $this->testResetPassword($emailService, $testUser);
        $this->newLine();
        $this->testWelcomeEmail($emailService, $testUser);
        $this->newLine();
        $this->testNotificationEmail($emailService, $testUser);
    }
}

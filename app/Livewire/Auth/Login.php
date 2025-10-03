<?php

namespace App\Livewire\Auth;

use Exception;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Services\AuthenticationLogService;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

#[Layout('components.layouts.auth')]
#[Title('Đăng nhập')]
class Login extends Component
{
    private const MAX_LOGIN_ATTEMPTS = 5;

    private const STATUS_PENDING = 'pending';
    private const STATUS_LOCKED = 'locked';
    private const STATUS_RESIGNED = 'resigned';

    private const ERROR_INVALID_CREDENTIALS = 'Thông tin đăng nhập không chính xác.';
    private const ERROR_ACCOUNT_PENDING = 'Tài khoản của bạn đang chờ xét duyệt.';
    private const ERROR_ACCOUNT_LOCKED = 'Tài khoản của bạn đã bị khóa.';
    private const ERROR_ACCOUNT_RESIGNED = 'Tài khoản của bạn đã không còn sử dụng.';

    #[Validate('required|string')]
    public string $login_id = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    protected AuthenticationLogService $authLogService;

    public function boot(AuthenticationLogService $authLogService)
    {
        $this->authLogService = $authLogService;
    }

    protected function shouldLog(): bool
    {
        return app()->environment() !== 'local';
    }

    public function login(): void
    {
        $this->validate();
        $this->ensureIsNotRateLimited();

        // Optional: captcha hook
        // if (!$this->verifyCaptcha()) {
        //     throw ValidationException::withMessages([
        //         'login_id' => 'Vui lòng xác minh captcha.',
        //     ]);
        // }

        $loginField = $this->determineLoginField();

        if (!$this->attemptAuthentication($loginField)) {
            $this->handleFailedLogin();
            return;
        }

        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Reset attempts + first login
        $user->update([
            'login_attempts' => 0,
            'first_login_at' => $user->first_login_at ?? now(),
        ]);

        if (!$this->validateUserStatus($user)) {
            return;
        }

        // Only check email verification if user logged in with email
        if ($loginField === 'email' && !$this->checkEmailVerification($user)) {
            return;
        }

        $this->handleSuccessfulLogin($user);
    }

    private function determineLoginField(): string
    {
        return filter_var($this->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    }

    private function checkEmailVerification($user): bool
    {
        if (!$user->hasVerifiedEmail()) {
            Auth::logout();
            $this->resetInput();
            throw ValidationException::withMessages([
                'login_id' => 'Email chưa được xác thực. Vui lòng xác thực trước khi đăng nhập.',
            ]);
        }

        return true;
    }

    private function attemptAuthentication(string $loginField): bool
    {
        return Auth::attempt(
            [$loginField => $this->login_id, 'password' => $this->password],
            $this->remember
        );
    }

    private function handleFailedLogin(): void
    {
        RateLimiter::hit($this->throttleKey());

        if ($this->shouldLog()) {
            $this->authLogService->logFailedLogin($this->login_id, 'Invalid credentials', request());
        }

        $this->password = '';

        throw ValidationException::withMessages([
            'login_id' => self::ERROR_INVALID_CREDENTIALS,
        ]);
    }

    private function validateUserStatus($user): bool
    {
        $statusMessages = [
            self::STATUS_PENDING => self::ERROR_ACCOUNT_PENDING,
            self::STATUS_LOCKED => self::ERROR_ACCOUNT_LOCKED,
            self::STATUS_RESIGNED => self::ERROR_ACCOUNT_RESIGNED,
        ];

        if (isset($statusMessages[$user->status])) {
            Session::flash('status', $statusMessages[$user->status]);
            Auth::logout();
            return false;
        }

        return true;
    }

    private function handleSuccessfulLogin($user): void
    {
        $this->clearRateLimit();
        Session::regenerate();

        if ($this->shouldLog()) {
            $this->authLogService->logSuccessfulLogin($user, request());
        }

        // Force logout other devices (secure way)
        try {
            Auth::logoutOtherDevices($this->password);
        } catch (Exception $e) {
            logger()->warning("Failed logoutOtherDevices: " . $e->getMessage());
        }

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }

    private function clearRateLimit(): void
    {
        RateLimiter::clear($this->throttleKey());
    }


    private function ensureIsNotRateLimited(): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), self::MAX_LOGIN_ATTEMPTS)) {
            return;
        }

        event(new Lockout(request()));

        if ($this->shouldLog()) {
            $this->authLogService->logBlockedLogin($this->login_id, 'Rate limited - too many attempts', request());
        }

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'login_id' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->login_id) . '|' . request()->ip());
    }

    public function mount(): void
    {
        // No cookie-based autofill
    }

    private function loadLastUserFromCookie(): void
    {
        if (!empty($this->login_id) || !Cookie::has('last_user')) {
            return;
        }

        try {
            $lastUser = json_decode(decrypt(Cookie::get('last_user')), true);
            if (is_array($lastUser) && isset($lastUser['id'])) {
                // Tự động gợi ý username/email từ DB nếu muốn
                $this->login_id = User::find($lastUser['id'])?->username ?? '';
            }
        } catch (Exception $e) {
            Cookie::queue(Cookie::forget('last_user'));
            if ($this->shouldLog()) {
                logger()->warning('Invalid last_user cookie detected and cleared: ' . $e->getMessage());
            }
        }
    }

    public function clearLastUser(): void
    {
        Cookie::queue(Cookie::forget('last_user'));
        $this->login_id = '';
        $this->redirectIntended(default: route('login', absolute: false), navigate: true);
    }

    private function resetInput(): void
    {
        $this->login_id = '';
        $this->password = '';
    }

}

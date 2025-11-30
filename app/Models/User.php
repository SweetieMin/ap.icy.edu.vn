<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Notifications\VerifyEmailNotification;
use App\Notifications\ResetPasswordNotification;
use Spatie\LaravelPasskeys\Models\Concerns\HasPasskeys;
use Spatie\LaravelPasskeys\Models\Concerns\InteractsWithPasskeys;


class User extends Authenticatable implements HasPasskeys
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes, InteractsWithPasskeys;



    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'account_code',
        'token',
        'password',
        'status',
        'login_attempts',
        'must_change_password',
        'last_password_change_at',
        'first_login_at',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'last_password_change_at' => 'datetime',
            'first_login_at' => 'datetime',
            'must_change_password' => 'boolean',
            'password' => 'hashed',
            'deleted_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    /**
     * The attributes add information of user.
     */
    public function detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    /**
     * The attributes add location of user.
     */
    public function locations()
    {
        return $this->belongsToMany(Location::class, 'location_user');
    }

    /**
     * The attributes add role of user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    /**
     * Send the email verification notification.
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmailNotification);
    }

    /**
     * Send the password reset notification.
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Send welcome notification with temporary password.
     */
    public function sendWelcomeNotification(string $temporaryPassword = null)
    {
        $this->notify(new \App\Notifications\WelcomeNotification($temporaryPassword));
    }

    /**
     * Send system notification.
     */
    public function sendSystemNotification(
        string $title,
        string $message,
    ) {
        $this->notify(new \App\Notifications\SystemNotification(
            $title,
            $message,
        ));
    }

    public function hasRole($role)
    {
        return $this->roles->contains('name', $role);
    }

    public function hasPermission($permission)
    {
        return $this->roles()->whereHas('permissions', function ($query) use ($permission) {
            $query->where('permissions.router', $permission);
        })->exists();
    }

    /**
     * The attributes add tuition of user.
     */
    public function tuitions()
    {
        return $this->hasMany(Tuition::class);
    }

    /**
     * The attributes add class schedule of user.
     */
    public function classSchedules()
    {
        return $this->hasMany(ClassSchedule::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_user');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function studentCareHistories()
    {
        return $this->hasMany(StudentCareHistory::class);
    }
}

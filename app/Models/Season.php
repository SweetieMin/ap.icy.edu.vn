<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Support\Season\SeasonHelper;

class Season extends Model
{
    protected $fillable = [
        'name',
        'code',
        'start_date',
        'end_date',
        'status',
        'note',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();
        
        // Tự động cập nhật status khi truy cập model
        static::retrieved(function ($season) {
            $season->updateStatusIfNeeded();
        });
    }

    public function getFormattedStartDateAttribute(): string
    {
        return optional($this->start_date)->format('Y-m-d');
    }

    public function getFormattedEndDateAttribute(): string
    {
        return optional($this->end_date)->format('Y-m-d');
    }

    public function getStatusBadgeColorAttribute(): string
    {
        return match ($this->season_status) {
            'upcoming' => 'yellow',
            'ongoing'  => 'green',
            'finished' => 'red',
            default    => 'gray',
        };
    }

    public function getStatusBadgeLabelAttribute(): string
    {
        return match ($this->season_status) {
            'upcoming' => 'Sắp diễn ra',
            'ongoing'  => 'Đang diễn ra',
            'finished' => 'Đã kết thúc',
            default    => 'Không rõ',
        };
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function tuitions()
    {
        return $this->hasMany(Tuition::class);
    }

    /**
     * Kiểm tra và cập nhật status nếu cần thiết
     */
    public function updateStatusIfNeeded()
    {
        if (!$this->start_date || !$this->end_date) {
            return;
        }

        $currentStatus = $this->status;
        $calculatedStatus = SeasonHelper::getSeasonStatus($this->start_date, $this->end_date);
        
        // Chỉ cập nhật nếu status khác với status hiện tại
        if ($currentStatus !== $calculatedStatus) {
            $this->status = $calculatedStatus;
            $this->saveQuietly(); // Sử dụng saveQuietly để tránh trigger events
        }
    }

    /**
     * Lấy status hiện tại dựa trên ngày tháng
     */
    public function getCurrentStatusAttribute(): string
    {
        if (!$this->start_date || !$this->end_date) {
            return 'unknown';
        }
        
        return SeasonHelper::getSeasonStatus($this->start_date, $this->end_date);
    }
}

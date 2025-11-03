<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class StudentCareHistory extends Model
{

    protected $table = 'student_care_histories';

    protected $fillable = [
        'attendance_id',
        'implementer_id',
        'status',
        'parent_response',
        'note',
    ];

    public function getCreatedAtDateAttribute()
    {
        return $this->created_at ? $this->created_at->format('d/m/Y') : null;
    }

    public function getCreatedAtTimeAttribute()
    {
        return $this->created_at ? $this->created_at->format('H:i:s') : null;
    }

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
    
    public function implementer()
    {
        return $this->belongsTo(User::class);
    }
}

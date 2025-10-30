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

    public function getCreatedAtDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function getCreatedAtTimeAttribute($value)
    {
        return Carbon::parse($value)->format('H:i:s');
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

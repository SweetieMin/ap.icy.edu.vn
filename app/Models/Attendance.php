<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'class_schedule_id',
        'student_id',
        'date',
        'status',
        'note',
    ];

    public function classSchedule()
    {
        return $this->belongsTo(ClassSchedule::class);
    }
    
    public function student()
    {
        return $this->belongsTo(User::class);
    }
}

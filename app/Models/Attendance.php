<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'class_schedule_id',
        'student_id',
        'date',
        'status',
        'student_care_status',
        'note',
        'checked_by',
    ];

    public function studentCareStatus(){
        return match($this->student_care_status){
            'success' => 'Đã liên hệ',
            'no_answer' => 'Không trả lời',
            'not_contact' => 'Chưa liên hệ',
            default => '',
        };
    }

    public function studentCareStatusColor(){
        return match($this->student_care_status){
            'success' => 'bg-green-100 text-green-800',
            'no_answer' => 'bg-red-100 text-red-800',
            'not_contact' => 'bg-gray-100 text-gray-800',
            default => '',
        };
    }

    public function getDateAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function classSchedule()
    {
        return $this->belongsTo(ClassSchedule::class);
    }
    
    public function student()
    {
        return $this->belongsTo(User::class);
    }

    public function studentCareHistories()
    {
        return $this->hasMany(StudentCareHistory::class);
    }

    public function checker()
    {
        return $this->belongsTo(User::class, 'checked_by');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    protected $table = 'syllabi';
    protected $fillable = [
        'subject_id',
        'lesson_number',
        'content',
        'vocabulary',
        'grammar',
        'assignment',
        'CLO',
        'is_url',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}

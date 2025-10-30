<?php

namespace App\Support\Validation;

class TimeTableRules
{
    public static function rules(): array
    {
        return [
            'selectedEventType' => 'required|string',
            'eventDescription' => 'nullable|string|max:500',
            'selectedCourseId' => 'required|exists:courses,id',
            'startTime' => 'required|date_format:H:i',
            'endTime' => 'required|date_format:H:i|after:startTime',
            'roomName' => 'nullable|string|max:100',
        ];
    }

    public static function messages(): array
    {
        return [
            'selectedEventType.required' => 'Vui lòng chọn loại sự kiện.',
            'eventDescription.max' => 'Mô tả không được vượt quá 500 ký tự.',
            'selectedCourseId.required' => 'Vui lòng chọn lớp học.',
            'selectedCourseId.exists' => 'Lớp học không tồn tại.',
            'startTime.required' => 'Vui lòng chọn giờ bắt đầu.',
            'startTime.date_format' => 'Giờ bắt đầu không đúng định dạng.',
            'endTime.required' => 'Vui lòng chọn giờ kết thúc.',
            'endTime.date_format' => 'Giờ kết thúc không đúng định dạng.',
            'endTime.after' => 'Giờ kết thúc phải sau giờ bắt đầu.',
            'roomName.max' => 'Tên phòng học không được vượt quá 100 ký tự.',
        ];
    }
}
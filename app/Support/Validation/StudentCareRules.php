<?php

namespace App\Support\Validation;

class StudentCareRules
{
    public static function rules()
    {
        return [
            'status' => 'required|in:success,failed,no_answer',
            'parent_response' => 'nullable|string|max:500',
            'note' => 'nullable|string|max:500',
        ];
    }

    public static function messages()
    {
        return [
            'status.required' => 'Trạng thái là bắt buộc.',
            'status.in' => 'Trạng thái không hợp lệ.',
            'parent_response.max' => 'Phản hồi phụ huynh không được vượt quá 500 ký tự.',
            'note.max' => 'Ghi chú không được vượt quá 500 ký tự.',
        ];
    }
}
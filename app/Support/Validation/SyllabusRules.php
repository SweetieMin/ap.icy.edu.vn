<?php

namespace App\Support\Validation;

class SyllabusRules
{
    public static function rules($id = null): array
    {
        $rules = [
            'subject_id' => ['required', 'integer'],
            'lesson_number' => ['required', 'integer', 'min:1'],
            'content' => ['nullable', 'string', 'max:500'],
            'vocabulary' => ['nullable', 'string', 'max:500'],
            'grammar' => ['nullable', 'string', 'max:500'],
            'assignment' => ['nullable', 'string', 'max:500'],
            'CLO' => ['nullable', 'string', 'max:500'],
        ];

        // Thêm rule unique cho lesson_number trong cùng subject khi update
        if ($id) {
            $rules['lesson_number'][] = 'unique:syllabi,lesson_number,' . $id . ',id,subject_id,?';
        } else {
            // Khi tạo mới, kiểm tra unique lesson_number trong cùng subject
            $rules['lesson_number'][] = 'unique:syllabi,lesson_number,NULL,id,subject_id,?';
        }

        return $rules;
    }

    public static function messages(): array
    {
        return [
            'subject_id.required' => 'Môn học là bắt buộc.',
            'subject_id.integer' => 'Môn học không hợp lệ.',
            
            'lesson_number.required' => 'Số bài học là bắt buộc.',
            'lesson_number.integer' => 'Số bài học phải là số nguyên.',
            'lesson_number.min' => 'Số bài học phải lớn hơn 0.',
            'lesson_number.unique' => 'Số bài học này đã tồn tại trong môn học này.',
            
            'content.max' => 'Nội dung không được vượt quá 500 ký tự.',
            'vocabulary.max' => 'Từ vựng không được vượt quá 500 ký tự.',
            'grammar.max' => 'Ngữ pháp không được vượt quá 500 ký tự.',
            'assignment.max' => 'Bài tập không được vượt quá 500 ký tự.',
            'CLO.max' => 'Mục tiêu (CLO) không được vượt quá 500 ký tự.',
        ];
    }

    public static function attributes(): array
    {
        return [
            'subject_id' => 'môn học',
            'lesson_number' => 'số bài học',
            'content' => 'nội dung',
            'vocabulary' => 'từ vựng',
            'grammar' => 'ngữ pháp',
            'assignment' => 'bài tập',
            'CLO' => 'mục tiêu (CLO)',
        ];
    }
}

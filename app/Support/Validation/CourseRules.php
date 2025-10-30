<?php

namespace App\Support\Validation;

class CourseRules
{
    public static function rules(?int $id = null): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'location_id' => ['required', 'exists:locations,id'],
            'season_id' => ['required', 'exists:seasons,id'],
            'program_id' => ['required', 'exists:programs,id'],
            'subject_id' => ['required', 'exists:subjects,id'],
            'ordering' => ['nullable', 'integer', 'min:1'],
            'description' => ['nullable', 'string', 'max:500'],
        ];
    }

    public static function messages(): array
    {
        return [
            'name.required' => 'Tên lớp học là bắt buộc.',
            'name.max' => 'Tên lớp học không được vượt quá 255 ký tự.',
            'location_id.required' => 'Cơ sở học là bắt buộc.',
            'location_id.exists' => 'Cơ sở học không tồn tại.',
            'season_id.required' => 'Học kỳ là bắt buộc.',
            'season_id.exists' => 'Học kỳ không tồn tại.',
            'program_id.required' => 'Chương trình là bắt buộc.',
            'program_id.exists' => 'Chương trình không tồn tại.',
            'subject_id.required' => 'Môn học là bắt buộc.',
            'subject_id.exists' => 'Môn học không tồn tại.',
            'ordering.integer' => 'Thứ tự phải là số nguyên.',
            'ordering.min' => 'Thứ tự phải lớn hơn 0.',
            'description.max' => 'Mô tả không được vượt quá 500 ký tự.',
        ];
    }
}
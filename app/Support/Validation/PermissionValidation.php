<?php

namespace App\Support\Validation;

use App\Repositories\Contracts\PermissionRepositoryInterface;

class PermissionValidation
{
    protected $permissionRepository;

    public function __construct(PermissionRepositoryInterface $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }

    /**
     * Get validation rules for creating permission
     */
    public function getCreateRules(): array
    {
        return [
            'router' => [
                'required',
                'string',
                'max:255',
                'unique:permissions,router',
                function ($attribute, $value, $fail) {
                    if (!$this->isValidAdminRoute($value)) {
                        $fail('Router phải có tiền tố "admin."');
                    }
                }
            ],
            'displayName' => [
                'required',
                'string',
                'max:255'
            ],
            'isShow' => [
                'boolean'
            ]
        ];
    }

    /**
     * Get validation rules for updating permission
     */
    public function getUpdateRules(int $permissionId): array
    {
        return [
            'displayName' => [
                'required',
                'string',
                'max:255'
            ],
            'isShow' => [
                'boolean'
            ]
        ];
    }

    /**
     * Get validation rules for bulk creating permissions
     */
    public function getBulkCreateRules(): array
    {
        return [
            'bulkPermissions' => [
                'required',
                'array',
                'min:1'
            ],
            'bulkPermissions.*.router' => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) {
                    if (!$this->isValidAdminRoute($value)) {
                        $fail('Router phải có tiền tố "admin."');
                    }
                }
            ],
            'bulkPermissions.*.displayName' => [
                'nullable',
                'string',
                'max:255'
            ],
            'bulkPermissions.*.isShow' => [
                'boolean'
            ]
        ];
    }

    /**
     * Get validation messages
     */
    public function getMessages(): array
    {
        return [
            'router.required' => 'Router là bắt buộc',
            'router.string' => 'Router phải là chuỗi',
            'router.max' => 'Router không được vượt quá 255 ký tự',
            'router.unique' => 'Router đã tồn tại',
            'displayName.required' => 'Tên hiển thị là bắt buộc',
            'displayName.string' => 'Tên hiển thị phải là chuỗi',
            'displayName.max' => 'Tên hiển thị không được vượt quá 255 ký tự',
            'isShow.boolean' => 'Hiển thị phải là true hoặc false',
            'bulkPermissions.required' => 'Danh sách quyền hạn là bắt buộc',
            'bulkPermissions.array' => 'Danh sách quyền hạn phải là mảng',
            'bulkPermissions.min' => 'Phải chọn ít nhất 1 quyền hạn',
            'bulkPermissions.*.router.required' => 'Router là bắt buộc',
            'bulkPermissions.*.router.string' => 'Router phải là chuỗi',
            'bulkPermissions.*.router.max' => 'Router không được vượt quá 255 ký tự',
            'bulkPermissions.*.router.unique' => 'Router đã tồn tại',
            'bulkPermissions.*.displayName.nullable' => 'Tên hiển thị có thể để trống',
            'bulkPermissions.*.displayName.string' => 'Tên hiển thị phải là chuỗi',
            'bulkPermissions.*.displayName.max' => 'Tên hiển thị không được vượt quá 255 ký tự',
            'bulkPermissions.*.isShow.boolean' => 'Hiển thị phải là true hoặc false',
        ];
    }

    /**
     * Check if route is a valid admin route
     */
    private function isValidAdminRoute(string $route): bool
    {
        return str_starts_with($route, 'admin.');
    }
}

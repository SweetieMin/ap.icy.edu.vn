<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Repositories\Contracts\PermissionRepositoryInterface;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['router' => 'admin.access.roles', 'displayName' => 'Chức vụ', 'isShow' => 1],
            ['router' => 'admin.access.permissions', 'displayName' => 'Quản lý quyền', 'isShow' => 1],
            ['router' => 'admin.arrangement.class-assignment', 'displayName' => 'Xếp lớp học', 'isShow' => 1],
            ['router' => 'admin.arrangement.time-table', 'displayName' => 'Xếp lịch học', 'isShow' => 1],
            ['router' => 'admin.finance.program-prices', 'displayName' => 'Quản lý giá tiền', 'isShow' => 1],
            ['router' => 'admin.finance.bank-accounts', 'displayName' => 'Quản lý tài khoản ngân hàng', 'isShow' => 1],
            ['router' => 'admin.finance.tuition-history', 'displayName' => 'Lịch sử đóng học phí', 'isShow' => 1],
            ['router' => 'admin.management.courses', 'displayName' => 'Quản lý lớp học', 'isShow' => 1],
            ['router' => 'admin.management.locations', 'displayName' => 'Quản lý cơ sở', 'isShow' => 1],
            ['router' => 'admin.finance.tuitions-payment', 'displayName' => 'Thanh toán học phí', 'isShow' => 1],
            ['router' => 'admin.management.curricula', 'displayName' => 'Giáo trình', 'isShow' => 1],
            ['router' => 'admin.management.programs', 'displayName' => 'Chương trình học', 'isShow' => 1],
            ['router' => 'admin.management.subjects', 'displayName' => 'Quản lý môn học', 'isShow' => 1],
            ['router' => 'admin.management.seasons', 'displayName' => 'Quản lý học kì', 'isShow' => 1],
            ['router' => 'admin.personnel.staff', 'displayName' => 'Quản lý nhân viên', 'isShow' => 1],
            ['router' => 'admin.settings.appearance', 'displayName' => 'Cài đặt hiển thị', 'isShow' => 0],
            ['router' => 'admin.settings.notification', 'displayName' => 'Cài đặt thông báo', 'isShow' => 0],
            ['router' => 'admin.settings.profile', 'displayName' => 'Cài đặt hồ sơ cá nhân', 'isShow' => 0],
            ['router' => 'admin.settings.password', 'displayName' => 'Cài đặt mật khẩu', 'isShow' => 0],
            ['router' => 'admin.settings.authentication-logs', 'displayName' => 'Xem nhật ký đăng nhập', 'isShow' => 0],
            ['router' => 'admin.personnel.students', 'displayName' => 'Quản lý học viên', 'isShow' => 1],
            ['router' => 'admin.management.syllabi', 'displayName' => 'Syllabus', 'isShow' => 1],
        ];

        foreach ($permissions as &$item) {
            app(PermissionRepositoryInterface::class)->create($item);
        }

    }
}

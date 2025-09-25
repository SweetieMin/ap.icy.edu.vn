<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Nguyễn Khắc Huấn',
                'email' => 'huank@icy.edu.com',
                'username' => 'huannk',
                'account_code' => 'ICY00001',
                'status' => 'active',
                'password' => bcrypt('ICY@2025!!'),
                'token' => Str::random(64),
                'must_change_password' => 0,
                'first_login_at' => now(),
                'last_password_change_at' => now(),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Nguyễn Đức Huỳnh',
                'email' => 'huynhnd@icy.edu.com',
                'username' => 'huynhnd',
                'account_code' => 'ICY00000',
                'status' => 'active',
                'password' => bcrypt('ICY@2025!!'),
                'token' => Str::random(64),
                'must_change_password' => 0,
                'first_login_at' => now(),
                'last_password_change_at' => now(),
                'email_verified_at' => now(),
            ],   
        ];

        foreach ($users as $item){
            User::create($item);
        }

        $userDetails = [
            [
                'user_id' => 1,
                'phone' => '',
                'address' => 'Thường Tân',
                'birthday' => null,
                'id_card' => null,
                'gender' => 1,
                'guardian_name' => '',
                'guardian_phone' => '',
                'avatar' => 'ICY00001-67ecb59fdfad6.png',
            ],
            [
                'user_id' => 2,
                'phone' => '',
                'address' => '',
                'birthday' => null,
                'id_card' => null,
                'gender' => 1,
                'guardian_name' => '',
                'guardian_phone' => '',
                'avatar' => '',
            ],
        ];

        foreach ($userDetails as $item){
            UserDetail::updateOrCreate($item);
        }
    }
}

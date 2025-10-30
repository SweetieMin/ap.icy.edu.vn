<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            LocationSeeder::class,
            SeasonSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            ProgramSeeder::class,
            SubjectSeeder::class,
            BankSeeder::class,
            ProgramLocationPricesSeeder::class,
            SyllabusSeeder::class,
        ]);

        DB::table('location_user')->insert([
            //BOD
            ['user_id' => 1, 'location_id' => 1],
            ['user_id' => 1, 'location_id' => 2],
            ['user_id' => 2, 'location_id' => 1],
            ['user_id' => 2, 'location_id' => 2],
            

        ]);

        DB::table('role_user')->insert([
            //BOD
            ['user_id' => 1, 'role_id' => 1],
            ['user_id' => 2, 'role_id' => 1],
           
        ]);

        DB::table('role_permission')->insert([
            //BOD

            //Accountant
            ['role_id' => 2, 'permission_id' => 7],
            ['role_id' => 2, 'permission_id' => 5],
            ['role_id' => 2, 'permission_id' => 21],
            ['role_id' => 2, 'permission_id' => 6],
            ['role_id' => 2, 'permission_id' => 10],
            //Center Manager
            ['role_id' => 3, 'permission_id' => 7],
            ['role_id' => 3, 'permission_id' => 21],
            ['role_id' => 3, 'permission_id' => 8],
            ['role_id' => 3, 'permission_id' => 15],
            ['role_id' => 3, 'permission_id' => 10],
            ['role_id' => 3, 'permission_id' => 4],
            ['role_id' => 3, 'permission_id' => 3],
            //Receptionist
            ['role_id' => 4, 'permission_id' => 21],
            ['role_id' => 4, 'permission_id' => 10],
        ]);
    }
}

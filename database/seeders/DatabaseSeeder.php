<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        $ThisTime = now();
        DB::table('users')->insert(
            [
                [
                    'employee_id' => '24120200',
                    'username' => 'rafli',
                    'password' => Hash::make('@Cmsmaju2023'),
                    'office_id' => '1',
                    'role_id' => '1',
                    'status' => '1',
                    'created_at' =>  Carbon::now(),
                    'updated_at' =>  Carbon::now(),
                ],
                [
                    'employee_id' => '24120201',
                    'username' => 'sayyid',
                    'password' => Hash::make('@Cmsmaju2023'),
                    'office_id' => '1',
                    'role_id' => '2',
                    'status' => '1',
                    'created_at' =>  Carbon::now(),
                    'updated_at' =>  Carbon::now(),
                ],
                [
                    'employee_id' => '24120202',
                    'username' => 'dimulya',
                    'password' => Hash::make('@Cmsmaju2023'),
                    'office_id' => '1',
                    'role_id' => '2',
                    'status' => '1',
                    'created_at' =>  Carbon::now(),
                    'updated_at' =>  Carbon::now(),
                ],
            ]
        );
    }
}

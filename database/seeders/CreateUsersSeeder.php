<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'is_admin' => '1',
                'password' => bcrypt('admin')
            ],
            [
                'name' => 'Nurse',
                'username' => 'nurse',
                'email' => 'nurse@nurse.com',
                'is_admin' => '2',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'Doctor',
                'username' => 'doctor',
                'email' => 'doctor@doctor.com',
                'is_admin' => '3',
                'password' => bcrypt('1234')
            ]
            ];
            foreach($user as $key => $value){
                User::create($value);
            }
    }
}

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
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@user.com',
                'is_admin' => '0',
                'password' => bcrypt('Qwer3112')
            ]
            ];
            foreach($user as $key => $value){
                User::create($value);
            }
    }
}

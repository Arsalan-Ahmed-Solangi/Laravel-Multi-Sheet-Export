<?php

namespace Database\Seeders;
use Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'RoleId' => '1',
                'password' => Hash::make('123456'),
                'email' => 'Admin@laravel.com',
            ],
            [
                'name' => 'Admin Second',
                'RoleId' => '1',
                'password' => Hash::make('123456'),
                'email' => 'AdminSecond@laravel.com',
            ],
            [
                'name' => 'Manager',
                'RoleId' => '2',
                'password' => Hash::make('123456'),
                'email' => 'Manager@laravel.com',
            ],
            [
                'name' => 'Manager2',
                'RoleId' => '2',
                'password' => Hash::make('123456'),
                'email' => 'Manager2@laravel.com',
            ],
            [
                'name' => 'Employee',
                'RoleId' => '3',
                'password' => Hash::make('123456'),
                'email' => 'Employee@laravel.com',
            ],
            [
                'name' => 'Employee2',
                'RoleId' => '3',
                'password' => Hash::make('123456'),
                'email' => 'Employee2@laravel.com',
            ],
        ];

        User::insert($users);
    }
}

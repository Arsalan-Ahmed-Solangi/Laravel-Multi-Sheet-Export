<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [['RoleName' => 'Admin'], ['RoleName' => 'Manager'], ['RoleName' => 'Employee']];

        Role::insert($roles);
    }
}

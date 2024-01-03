<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@bycarr.com',
                'password' => Hash::make('password'),
                'is_visible' => false,
            ],

        );
        $role = Role::create(['name' => 'Super Admin', 'is_editable' => false, 'is_visible' => false, 'agent_available' => false]);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

        $user = User::create(
            [
                'name' => 'System Admin',
                'email' => 'admin@bycarr.com',
                'password' => Hash::make('password'),
            ],

        );
        $role = Role::create(['name' => 'Admin', 'agent_available' => false]);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
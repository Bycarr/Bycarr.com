<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [

            ['name' => 'role-list', 'group' => 'role'],
            ['name' => 'role-add', 'group' => 'role'],
            ['name' => 'role-edit', 'group' => 'role'],
            ['name' => 'role-delete', 'group' => 'role'],
            ['name' => 'role-change-status', 'group' => 'role'],

            ['name' => 'user-list', 'group' => 'user'],
            ['name' => 'user-add', 'group' => 'user'],
            ['name' => 'user-edit', 'group' => 'user'],
            ['name' => 'user-delete', 'group' => 'user'],
            ['name' => 'user-change-status', 'group' => 'user'],

            ['name' => 'agent-list', 'group' => 'agent'],
            ['name' => 'agent-add', 'group' => 'agent'],
            ['name' => 'agent-edit', 'group' => 'agent'],
            ['name' => 'agent-delete', 'group' => 'agent'],
            ['name' => 'agent-change-status', 'group' => 'agent'],

            ['name' => 'attribute-list', 'group' => 'attribute'],
            ['name' => 'attribute-add', 'group' => 'attribute'],
            ['name' => 'attribute-edit', 'group' => 'attribute'],
            ['name' => 'attribute-delete', 'group' => 'attribute'],
            ['name' => 'attribute-change-status', 'group' => 'attribute'],

            ['name' => 'product-category-list', 'group' => 'product-category'],
            ['name' => 'product-category-add', 'group' => 'product-category'],
            ['name' => 'product-category-edit', 'group' => 'product-category'],
            ['name' => 'product-category-delete', 'group' => 'product-category'],
            ['name' => 'product-category-change-status', 'group' => 'product-category'],

            ['name' => 'product-brand-list', 'group' => 'product-brand'],
            ['name' => 'product-brand-add', 'group' => 'product-brand'],
            ['name' => 'product-brand-edit', 'group' => 'product-brand'],
            ['name' => 'product-brand-delete', 'group' => 'product-brand'],
            ['name' => 'product-brand-change-status', 'group' => 'product-brand'],

            ['name' => 'product-model-list', 'group' => 'product-model'],
            ['name' => 'product-model-add', 'group' => 'product-model'],
            ['name' => 'product-model-edit', 'group' => 'product-model'],
            ['name' => 'product-model-delete', 'group' => 'product-model'],
            ['name' => 'product-model-change-status', 'group' => 'product-model'],

            ['name' => 'product-list', 'group' => 'product'],
            ['name' => 'product-add', 'group' => 'product'],
            ['name' => 'product-edit', 'group' => 'product'],
            ['name' => 'product-delete', 'group' => 'product'],
            ['name' => 'product-change-status', 'group' => 'product'],
            ['name' => 'product-verify', 'group' => 'product'],
            // ['name' => 'product-trash', 'group' => 'product'],
            // ['name' => 'product-restore', 'group' => 'product'],
            ['name' => 'product-filter', 'group' => 'product'],

            ['name' => 'content-list', 'group' => 'content'],
            ['name' => 'content-add', 'group' => 'content'],
            ['name' => 'content-edit', 'group' => 'content'],
            ['name' => 'content-delete', 'group' => 'content'],
            ['name' => 'content-change-status', 'group' => 'content'],

            ['name' => 'menu-list', 'group' => 'menu'],
            ['name' => 'menu-add', 'group' => 'menu'],
            ['name' => 'menu-edit', 'group' => 'menu'],
            ['name' => 'menu-delete', 'group' => 'menu'],
            ['name' => 'menu-change-status', 'group' => 'menu'],
            ['name' => 'menu-item', 'group' => 'menu'],

            ['name' => 'city-list', 'group' => 'city'],
            ['name' => 'city-add', 'group' => 'city'],
            ['name' => 'city-edit', 'group' => 'city'],
            ['name' => 'city-delete', 'group' => 'city'],
            ['name' => 'city-change-status', 'group' => 'city'],

            ['name' => 'banner-list', 'group' => 'banner'],
            ['name' => 'banner-add', 'group' => 'banner'],
            ['name' => 'banner-edit', 'group' => 'banner'],
            ['name' => 'banner-delete', 'group' => 'banner'],
            ['name' => 'banner-change-status', 'group' => 'banner'],

            ['name' => 'booking-list', 'group' => 'booking'],
            ['name' => 'booking-view-detail', 'group' => 'booking'],
            ['name' => 'booking-update', 'group' => 'booking'],

            ['name' => 'customer-list', 'group' => 'customer'],
            ['name' => 'customer-add', 'group' => 'customer'],
            ['name' => 'customer-edit', 'group' => 'customer'],
            ['name' => 'customer-delete', 'group' => 'customer'],
            ['name' => 'customer-change-status', 'group' => 'customer'],



        ];
        foreach ($permissions as $permission) {
            $menu = new Permission();
            if ($menu->where('name', $permission['name'])->count() > 0) {
                $menu = $menu->where('name', $permission['name'])->first();
            }
            $menu->fill($permission);
            $menu->save();
        }
        $role = Role::find(1);
        if ($role) {
            $permissions = Permission::pluck('id', 'id')->all();
            $role->syncPermissions($permissions);
        }
    }
}

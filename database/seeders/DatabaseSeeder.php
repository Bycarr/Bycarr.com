<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleAndUserSeeder::class);
        $this->call(LocalitySeeder::class);
        $this->call(LayoutOptionSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(AttributeSeeder::class);
    }
}

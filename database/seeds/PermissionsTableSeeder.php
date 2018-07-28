<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'show_image']);
        Permission::create(['name' => 'edit_image']);
        Permission::create(['name' => 'store_image']);
        Permission::create(['name' => 'destroy_image']);
    }
}

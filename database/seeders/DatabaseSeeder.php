<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Create Permission
        Permission::create(['name' => 'product-list']);

        // Create Roles
        $userRole = Role::create(['name' => 'User']);
        $userRole->givePermissionTo('product-list');
    }
}

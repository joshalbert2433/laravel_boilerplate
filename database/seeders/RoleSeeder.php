<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // make role
        $role_admin = Role::firstOrCreate(['name' => 'admin']);
        $role_standard = Role::firstOrCreate(['name' => 'standard']);

        // make permission
        $permission_read = Permission::create(['name' => 'read']);
        $permission_edit = Permission::create(['name' => 'edit']);
        $permission_write = Permission::create(['name' => 'write']);
        $permission_delete = Permission::create(['name' => 'delete']);

        //assign permission to role

        $permission_admin = [$permission_edit, $permission_write, $permission_delete, $permission_read];

        $role_admin->syncPermissions($permission_admin);
        $role_standard->givePermissionTo($permission_read);
    }
}

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
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.fly.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.fly.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.fly.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.fly.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.pass.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.pass.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.pass.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.pass.destroy'])->syncRoles([$role1,$role2]);
    }
}

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
        $role1 = Role::create(['name'=>'superadmin']);
        $role2 = Role::create(['name'=>'admin']);
        $role3 = Role::create(['name'=>'prevencionista']);
        $role4 = Role::create(['name'=>'consultor']);
        //sa=superadmin
        Permission::create(['name'=>'sa.home'])->syncRoles($role1, $role2, $role3, $role4);
        //nu=nuevo usuario
        Permission::create(['name'=>'sa.nu.index'])->syncRoles($role1, $role2);
        Permission::create(['name'=>'sa.nu.create'])->syncRoles($role1, $role2);
        Permission::create(['name'=>'sa.nu.edit'])->syncRoles($role1, $role2);
        Permission::create(['name'=>'sa.nu.destroy'])->syncRoles($role1);//aqi qedé-----
    }
}

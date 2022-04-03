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
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name' => 'administrador']);
        $role2=Role::create(['name' => 'empleado']);
        $role3=Role::create(['name' => 'cliente']);

        Permission::create(['name' => 'administrador.home'])->assignRole($role1);
        Permission::create(['name' => 'empleado.home'])->assignRole($role2);
        Permission::create(['name' => 'cliente.home'])->assignRole($role3);

        
    }
}

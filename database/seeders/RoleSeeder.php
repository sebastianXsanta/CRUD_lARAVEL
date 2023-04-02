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
        //
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Dispatcher']);
        
        //create aerolineas-Admin
        Permission::create(['name' => 'EditAerolineas'])->syncRoles($role1);
        //edit aerolineas-Admin
        Permission::create(['name' => 'CreateAerolineas'])->syncRoles($role1);
        //delete aerolineas-Admin
        Permission::create(['name' => 'DeleteAerolineas'])->assignRole($role1);

        //create vuelos-Admin vendedor
        Permission::create(['name' => 'CreateteVuelos'])->syncRoles([$role1, $role2]);
        //edit vuelos-Admin vendedor
        Permission::create(['name' => 'EeditVuelos'])->syncRoles([$role1, $role2]);
        //delete vuelos-Admin
        Permission::create(['name' => 'DeleteVuelos'])->assignRole($role1);
    }
}

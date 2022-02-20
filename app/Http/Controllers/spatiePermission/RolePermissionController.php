<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);


        $permission_roles_create = Permission::create(['name' => 'roles_create']);
        $permission_roles_read = Permission::create(['name' => 'roles_read']);
        $permission_roles_update = Permission::create(['name' => 'roles_update']);
        $permission_roles_delete = Permission::create(['name' => 'roles_delete']);


        $roleAdmin->givePermissionTo($permission_roles_create);
        $roleAdmin->givePermissionTo($permission_roles_read);
        $roleAdmin->givePermissionTo($permission_roles_update);
        $roleAdmin->givePermissionTo($permission_roles_delete);


        $roleAgent->givePermissionTo($permission_roles_read);
    }

    public function assignRole($id)
    {
        $roleAdmin = Role::where('name', 'admin')->first();
        $roleAgent = Role::where('name', 'agent')->first();
        $roleUser = Role::where('name', 'user')->first();

        $agent = [];

        $agent[$id] = User::find($id);


        $agent[$id]->assignRole($roleAdmin);
        $agent[2]->assignRole($roleAgent);
        $agent[3]->assignRole($roleUser);

    }
}

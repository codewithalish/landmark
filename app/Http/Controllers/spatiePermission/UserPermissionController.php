<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserPermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_users_create = Permission::create(['name' => 'users_create']);
        $permission_users_read = Permission::create(['name' => 'users_read']);
        $permission_users_update = Permission::create(['name' => 'users_update']);
        $permission_users_delete = Permission::create(['name' => 'users_delete']);


        $roleAdmin->givePermissionTo($permission_users_create);
        $roleAdmin->givePermissionTo($permission_users_read);
        $roleAdmin->givePermissionTo($permission_users_update);
        $roleAdmin->givePermissionTo($permission_users_delete);


        $roleAgent->givePermissionTo($permission_users_read);
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class UserPermissionController extends Controller
{
    //
    use HasRoles;


    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_user_create = Permission::create(['name' => 'user_create']);
        $permission_user_read = Permission::create(['name' => 'user_read']);
        $permission_user_update = Permission::create(['name' => 'user_update']);
        $permission_user_delete = Permission::create(['name' => 'user_delete']);


        $roleAdmin->givePermissionTo($permission_user_create);
        $roleAdmin->givePermissionTo($permission_user_read);
        $roleAdmin->givePermissionTo($permission_user_update);
        $roleAdmin->givePermissionTo($permission_user_delete);


        $roleAgent->givePermissionTo($permission_user_read);
    }




}

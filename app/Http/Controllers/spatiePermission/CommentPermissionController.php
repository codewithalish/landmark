<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CommentPermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_permissions_create = Permission::create(['name' => 'permissions_create']);
        $permission_permissions_read = Permission::create(['name' => 'permissions_read']);
        $permission_permissions_update = Permission::create(['name' => 'permissions_update']);
        $permission_permissions_delete = Permission::create(['name' => 'permissions_delete']);


        $roleAdmin->givePermissionTo($permission_permissions_create);
        $roleAdmin->givePermissionTo($permission_permissions_read);
        $roleAdmin->givePermissionTo($permission_permissions_update);
        $roleAdmin->givePermissionTo($permission_permissions_delete);


        $roleAgent->givePermissionTo($permission_permissions_read);
    }


}

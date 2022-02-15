<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class TagPermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_tags_create = Permission::create(['name' => 'tags_create']);
        $permission_tags_read = Permission::create(['name' => 'tags_read']);
        $permission_tags_update = Permission::create(['name' => 'tags_update']);
        $permission_tags_delete = Permission::create(['name' => 'tags_delete']);


        $roleAdmin->givePermissionTo($permission_tags_create);
        $roleAdmin->givePermissionTo($permission_tags_read);
        $roleAdmin->givePermissionTo($permission_tags_update);
        $roleAdmin->givePermissionTo($permission_tags_delete);


        $roleAgent->givePermissionTo($permission_tags_read);
        $roleAgent->givePermissionTo($permission_tags_update);
        $roleAgent->givePermissionTo($permission_tags_delete);
    }


}

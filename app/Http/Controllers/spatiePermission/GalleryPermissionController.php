<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class GalleryPermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_galleries_create = Permission::create(['name' => 'galleries_create']);
        $permission_galleries_read = Permission::create(['name' => 'galleries_read']);
        $permission_galleries_update = Permission::create(['name' => 'galleries_update']);
        $permission_galleries_delete = Permission::create(['name' => 'galleries_delete']);


        $roleAdmin->givePermissionTo($permission_galleries_create);
        $roleAdmin->givePermissionTo($permission_galleries_read);
        $roleAdmin->givePermissionTo($permission_galleries_update);
        $roleAdmin->givePermissionTo($permission_galleries_delete);


        $roleAgent->givePermissionTo($permission_galleries_create);
        $roleAgent->givePermissionTo($permission_galleries_read);
        $roleAgent->givePermissionTo($permission_galleries_update);
        $roleAgent->givePermissionTo($permission_galleries_delete);
    }


}

<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CategoryPermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_categories_create = Permission::create(['name' => 'categories_create']);
        $permission_categories_read = Permission::create(['name' => 'categories_read']);
        $permission_categories_update = Permission::create(['name' => 'categories_update']);
        $permission_categories_delete = Permission::create(['name' => 'categories_delete']);


        $roleAdmin->givePermissionTo($permission_categories_create);
        $roleAdmin->givePermissionTo($permission_categories_read);
        $roleAdmin->givePermissionTo($permission_categories_update);
        $roleAdmin->givePermissionTo($permission_categories_delete);


        $roleAgent->givePermissionTo($permission_categories_read);
    }


}

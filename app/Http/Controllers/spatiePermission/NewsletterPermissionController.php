<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class NewsletterPermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_newsletters_create = Permission::create(['name' => 'newsletters_create']);
        $permission_newsletters_read = Permission::create(['name' => 'newsletters_read']);
        $permission_newsletters_update = Permission::create(['name' => 'newsletters_update']);
        $permission_newsletters_delete = Permission::create(['name' => 'newsletters_delete']);


        $roleAdmin->givePermissionTo($permission_newsletters_create);
        $roleAdmin->givePermissionTo($permission_newsletters_read);
        $roleAdmin->givePermissionTo($permission_newsletters_update);
        $roleAdmin->givePermissionTo($permission_newsletters_delete);


        $roleAgent->givePermissionTo($permission_newsletters_read);
        $roleAgent->givePermissionTo($permission_newsletters_delete);
    }


}

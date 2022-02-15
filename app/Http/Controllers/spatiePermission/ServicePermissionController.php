<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ServicePermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_services_create = Permission::create(['name' => 'services_create']);
        $permission_services_read = Permission::create(['name' => 'services_read']);
        $permission_services_update = Permission::create(['name' => 'services_update']);
        $permission_services_delete = Permission::create(['name' => 'services_delete']);


        $roleAdmin->givePermissionTo($permission_services_create);
        $roleAdmin->givePermissionTo($permission_services_read);
        $roleAdmin->givePermissionTo($permission_services_update);
        $roleAdmin->givePermissionTo($permission_services_delete);


        $roleAgent->givePermissionTo($permission_services_create);
        $roleAgent->givePermissionTo($permission_services_read);
        $roleAgent->givePermissionTo($permission_services_update);
        $roleAgent->givePermissionTo($permission_services_delete);
    }


}

<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CasePermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_cases_create = Permission::create(['name' => 'cases_create']);
        $permission_cases_read = Permission::create(['name' => 'cases_read']);
        $permission_cases_update = Permission::create(['name' => 'cases_update']);
        $permission_cases_delete = Permission::create(['name' => 'cases_delete']);


        $roleAdmin->givePermissionTo($permission_cases_create);
        $roleAdmin->givePermissionTo($permission_cases_read);
        $roleAdmin->givePermissionTo($permission_cases_update);
        $roleAdmin->givePermissionTo($permission_cases_delete);


        $roleAgent->givePermissionTo($permission_cases_create);
        $roleAgent->givePermissionTo($permission_cases_read);
        $roleAgent->givePermissionTo($permission_cases_update);
        $roleAgent->givePermissionTo($permission_cases_delete);
    }


}

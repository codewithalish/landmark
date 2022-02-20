<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class VariablePermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_variables_create = Permission::create(['name' => 'variables_create']);
        $permission_variables_read = Permission::create(['name' => 'variables_read']);
        $permission_variables_update = Permission::create(['name' => 'variables_update']);
        $permission_variables_delete = Permission::create(['name' => 'variables_delete']);


        $roleAdmin->givePermissionTo($permission_variables_create);
        $roleAdmin->givePermissionTo($permission_variables_read);
        $roleAdmin->givePermissionTo($permission_variables_update);
        $roleAdmin->givePermissionTo($permission_variables_delete);


        $roleAgent->givePermissionTo($permission_variables_create);
        $roleAgent->givePermissionTo($permission_variables_read);
        $roleAgent->givePermissionTo($permission_variables_update);
        $roleAgent->givePermissionTo($permission_variables_delete);
    }


}

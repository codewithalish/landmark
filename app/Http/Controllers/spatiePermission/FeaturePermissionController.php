<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class FeaturePermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_features_create = Permission::create(['name' => 'features_create']);
        $permission_features_read = Permission::create(['name' => 'features_read']);
        $permission_features_update = Permission::create(['name' => 'features_update']);
        $permission_features_delete = Permission::create(['name' => 'features_delete']);


        $roleAdmin->givePermissionTo($permission_features_create);
        $roleAdmin->givePermissionTo($permission_features_read);
        $roleAdmin->givePermissionTo($permission_features_update);
        $roleAdmin->givePermissionTo($permission_features_delete);


        $roleAgent->givePermissionTo($permission_features_read);
    }


}

<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PartnerPermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_partners_create = Permission::create(['name' => 'partners_create']);
        $permission_partners_read = Permission::create(['name' => 'partners_read']);
        $permission_partners_update = Permission::create(['name' => 'partners_update']);
        $permission_partners_delete = Permission::create(['name' => 'partners_delete']);


        $roleAdmin->givePermissionTo($permission_partners_create);
        $roleAdmin->givePermissionTo($permission_partners_read);
        $roleAdmin->givePermissionTo($permission_partners_update);
        $roleAdmin->givePermissionTo($permission_partners_delete);


        $roleAgent->givePermissionTo($permission_partners_create);
        $roleAgent->givePermissionTo($permission_partners_read);
        $roleAgent->givePermissionTo($permission_partners_update);

    }


}

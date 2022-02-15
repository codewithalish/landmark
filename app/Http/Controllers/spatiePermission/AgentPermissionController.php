<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AgentPermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_agents_create = Permission::create(['name' => 'agents_create']);
        $permission_agents_read = Permission::create(['name' => 'agents_read']);
        $permission_agents_update = Permission::create(['name' => 'agents_update']);
        $permission_agents_delete = Permission::create(['name' => 'agents_delete']);


        $roleAdmin->givePermissionTo($permission_agents_create);
        $roleAdmin->givePermissionTo($permission_agents_read);
        $roleAdmin->givePermissionTo($permission_agents_update);
        $roleAdmin->givePermissionTo($permission_agents_delete);


        $roleAgent->givePermissionTo($permission_agents_read);
    }


}

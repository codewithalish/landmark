<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ContactPermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_contacts_create = Permission::create(['name' => 'contacts_create']);
        $permission_contacts_read = Permission::create(['name' => 'contacts_read']);
        $permission_contacts_update = Permission::create(['name' => 'contacts_update']);
        $permission_contacts_delete = Permission::create(['name' => 'contacts_delete']);


        $roleAdmin->givePermissionTo($permission_contacts_create);
        $roleAdmin->givePermissionTo($permission_contacts_read);
        $roleAdmin->givePermissionTo($permission_contacts_update);
        $roleAdmin->givePermissionTo($permission_contacts_delete);


        $roleAgent->givePermissionTo($permission_contacts_read);
        $roleAgent->givePermissionTo($permission_contacts_delete);
    }


}

<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class FeedbackPermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_feedbacks_create = Permission::create(['name' => 'feedbacks_create']);
        $permission_feedbacks_read = Permission::create(['name' => 'feedbacks_read']);
        $permission_feedbacks_update = Permission::create(['name' => 'feedbacks_update']);
        $permission_feedbacks_delete = Permission::create(['name' => 'feedbacks_delete']);


        $roleAdmin->givePermissionTo($permission_feedbacks_create);
        $roleAdmin->givePermissionTo($permission_feedbacks_read);
        $roleAdmin->givePermissionTo($permission_feedbacks_update);
        $roleAdmin->givePermissionTo($permission_feedbacks_delete);


        $roleAgent->givePermissionTo($permission_feedbacks_read);
        $roleAgent->givePermissionTo($permission_feedbacks_delete);
    }


}

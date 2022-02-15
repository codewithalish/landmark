<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PostPermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_posts_create = Permission::create(['name' => 'posts_create']);
        $permission_posts_read = Permission::create(['name' => 'posts_read']);
        $permission_posts_update = Permission::create(['name' => 'posts_update']);
        $permission_posts_delete = Permission::create(['name' => 'posts_delete']);


        $roleAdmin->givePermissionTo($permission_posts_create);
        $roleAdmin->givePermissionTo($permission_posts_read);
        $roleAdmin->givePermissionTo($permission_posts_update);
        $roleAdmin->givePermissionTo($permission_posts_delete);


        $roleAgent->givePermissionTo($permission_posts_create);
        $roleAgent->givePermissionTo($permission_posts_read);
        $roleAgent->givePermissionTo($permission_posts_update);
        $roleAgent->givePermissionTo($permission_posts_delete);
    }


}

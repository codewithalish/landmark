<?php

namespace App\Http\Controllers\spatiePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class BookmarkPermissionController extends Controller
{
    //
    public function addRolePermission()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);



        $permission_bookmarks_create = Permission::create(['name' => 'bookmarks_create']);
        $permission_bookmarks_read = Permission::create(['name' => 'bookmarks_read']);
        $permission_bookmarks_update = Permission::create(['name' => 'bookmarks_update']);
        $permission_bookmarks_delete = Permission::create(['name' => 'bookmarks_delete']);


        $roleAdmin->givePermissionTo($permission_bookmarks_create);
        $roleAdmin->givePermissionTo($permission_bookmarks_read);
        $roleAdmin->givePermissionTo($permission_bookmarks_update);
        $roleAdmin->givePermissionTo($permission_bookmarks_delete);


        $roleAgent->givePermissionTo($permission_bookmarks_read);
        $roleAgent->givePermissionTo($permission_bookmarks_update);
        $roleAgent->givePermissionTo($permission_bookmarks_delete);

    }


}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AssignPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $roleAgent = Role::where('name', 'agent')->first();
        $roleAgent->givePermissionTo([
            'users_read',
            'posts_read',
            'posts_create',
            'posts_update',
            'posts_delete',
            'galleries_create',
            'galleries_delete',
            'variables_read',
            'cases_read',
            'cases_create',
            'cases_update',
            'cases_delete',
            'comments_read',
            'contacts_read',
            'feedbacks_read',
            'menu_read',
            'newsletters_read',
            'partners_read',
            'services_read',

        ]);



    }
}

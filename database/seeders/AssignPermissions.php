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
            'galleries_create',
            'variables_read',
            'cases_read',
            'cases_create',
            'comments_read',
            'contacts_read'
        ]);



    }
}

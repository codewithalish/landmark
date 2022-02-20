<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_agents_create = Permission::create(['name' => 'agents_create']);
        $permission_agents_read = Permission::create(['name' => 'agents_read']);
        $permission_agents_update = Permission::create(['name' => 'agents_update']);
        $permission_agents_delete = Permission::create(['name' => 'agents_delete']);

        $permission_bookmarks_create = Permission::create(['name' => 'bookmarks_create']);
        $permission_bookmarks_read = Permission::create(['name' => 'bookmarks_read']);
        $permission_bookmarks_update = Permission::create(['name' => 'bookmarks_update']);
        $permission_bookmarks_delete = Permission::create(['name' => 'bookmarks_delete']);

        $permission_cases_create = Permission::create(['name' => 'cases_create']);
        $permission_cases_read = Permission::create(['name' => 'cases_read']);
        $permission_cases_update = Permission::create(['name' => 'cases_update']);
        $permission_cases_delete = Permission::create(['name' => 'cases_delete']);

        $permission_categories_create = Permission::create(['name' => 'categories_create']);
        $permission_categories_read = Permission::create(['name' => 'categories_read']);
        $permission_categories_update = Permission::create(['name' => 'categories_update']);
        $permission_categories_delete = Permission::create(['name' => 'categories_delete']);

        $permission_permissions_create = Permission::create(['name' => 'permissions_create']);
        $permission_permissions_read = Permission::create(['name' => 'permissions_read']);
        $permission_permissions_update = Permission::create(['name' => 'permissions_update']);
        $permission_permissions_delete = Permission::create(['name' => 'permissions_delete']);

        $permission_contacts_create = Permission::create(['name' => 'contacts_create']);
        $permission_contacts_read = Permission::create(['name' => 'contacts_read']);
        $permission_contacts_update = Permission::create(['name' => 'contacts_update']);
        $permission_contacts_delete = Permission::create(['name' => 'contacts_delete']);


        $permission_features_create = Permission::create(['name' => 'features_create']);
        $permission_features_read = Permission::create(['name' => 'features_read']);
        $permission_features_update = Permission::create(['name' => 'features_update']);
        $permission_features_delete = Permission::create(['name' => 'features_delete']);

        $permission_feedbacks_create = Permission::create(['name' => 'feedbacks_create']);
        $permission_feedbacks_read = Permission::create(['name' => 'feedbacks_read']);
        $permission_feedbacks_update = Permission::create(['name' => 'feedbacks_update']);
        $permission_feedbacks_delete = Permission::create(['name' => 'feedbacks_delete']);

        $permission_galleries_create = Permission::create(['name' => 'galleries_create']);
        $permission_galleries_read = Permission::create(['name' => 'galleries_read']);
        $permission_galleries_update = Permission::create(['name' => 'galleries_update']);
        $permission_galleries_delete = Permission::create(['name' => 'galleries_delete']);


        $permission_newsletters_create = Permission::create(['name' => 'newsletters_create']);
        $permission_newsletters_read = Permission::create(['name' => 'newsletters_read']);
        $permission_newsletters_update = Permission::create(['name' => 'newsletters_update']);
        $permission_newsletters_delete = Permission::create(['name' => 'newsletters_delete']);

        $permission_partners_create = Permission::create(['name' => 'partners_create']);
        $permission_partners_read = Permission::create(['name' => 'partners_read']);
        $permission_partners_update = Permission::create(['name' => 'partners_update']);
        $permission_partners_delete = Permission::create(['name' => 'partners_delete']);

        $permission_posts_create = Permission::create(['name' => 'posts_create']);
        $permission_posts_read = Permission::create(['name' => 'posts_read']);
        $permission_posts_update = Permission::create(['name' => 'posts_update']);
        $permission_posts_delete = Permission::create(['name' => 'posts_delete']);

        $permission_roles_create = Permission::create(['name' => 'roles_create']);
        $permission_roles_read = Permission::create(['name' => 'roles_read']);
        $permission_roles_update = Permission::create(['name' => 'roles_update']);
        $permission_roles_delete = Permission::create(['name' => 'roles_delete']);

        $permission_services_create = Permission::create(['name' => 'services_create']);
        $permission_services_read = Permission::create(['name' => 'services_read']);
        $permission_services_update = Permission::create(['name' => 'services_update']);
        $permission_services_delete = Permission::create(['name' => 'services_delete']);

        $permission_tags_create = Permission::create(['name' => 'tags_create']);
        $permission_tags_read = Permission::create(['name' => 'tags_read']);
        $permission_tags_update = Permission::create(['name' => 'tags_update']);
        $permission_tags_delete = Permission::create(['name' => 'tags_delete']);

        $permission_users_create = Permission::create(['name' => 'users_create']);
        $permission_users_read = Permission::create(['name' => 'users_read']);
        $permission_users_update = Permission::create(['name' => 'users_update']);
        $permission_users_delete = Permission::create(['name' => 'users_delete']);

        $permission_variables_create = Permission::create(['name' => 'variables_create']);
        $permission_variables_read = Permission::create(['name' => 'variables_read']);
        $permission_variables_update = Permission::create(['name' => 'variables_update']);
        $permission_variables_delete = Permission::create(['name' => 'variables_delete']);





        $role_agent = Role::where('name','agent')->first();



    }
}

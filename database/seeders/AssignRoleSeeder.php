<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AssignRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::where('name', 'admin')->first();
        $roleAgent = Role::where('name', 'agent')->first();
        $roleUser = Role::where('name', 'user')->first();


        $admin = User::find(1);
        $agent = User::find(2);
        $user = User::find(3);

        $admin->assignRole($roleAdmin);
        $agent->assignRole($roleAgent);
        $user->assignRole($roleUser);


    }
}

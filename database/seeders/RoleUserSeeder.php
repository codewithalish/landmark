<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Role_User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role_User::create([
            'role_id'=>'1',
            'user_id'=>'1'
        ]);
        Role_User::create([
            'role_id'=>'2',
            'user_id'=>'2'
        ]);
        Role_User::create([
            'role_id'=>'3',
            'user_id'=>'3'
        ]);
    }
}

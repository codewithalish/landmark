<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'admin',
            'guard_name'=>'web',
        ]);
        Role::create([
            'name'=>'agent',
            'guard_name'=>'web',
        ]);
        Role::create([
            'name'=>'user',
            'guard_name'=>'web',
        ]);
    }
}

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
            'name'=>'ادمین',
            'guard_name'=>'web',
        ]);
        Role::create([
            'name'=>'نماینده فروش',
            'guard_name'=>'web',
        ]);
        Role::create([
            'name'=>'کاربر',
            'guard_name'=>'web',
        ]);
    }
}

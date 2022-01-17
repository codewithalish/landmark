<?php

namespace Database\Seeders;

use App\Models\CaseModel;
use App\Models\Role;
use Illuminate\Database\Seeder;

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
            'title'=>'ادمین'
        ]);
        Role::create([
            'name'=>'agent',
            'title'=>'نماینده'
        ]);
        Role::create([
            'name'=>'user',
            'title'=>'کاربر'
        ]);


    }
}

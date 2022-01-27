<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name'=>'مجید صالحی',
            'mobile'=>'09181230001',
            'email'=>'majid@gmail.com',
            'address'=>'mostafa khomeini',

            #'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

        ]);
        User::create([
            'name'=>'فاطمه مظفری',
            'mobile'=>'09181230002',
            'email'=>'fateme@gmail.com',
            'address'=>'fatemieh',

            #'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),


        ]);
        User::create([
            'name'=>'علی شریفی نیستانی',
            'mobile'=>'09181230003',
            'email'=>'ali@gmail.com',
            'address'=>'hafezieh',

            #'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}

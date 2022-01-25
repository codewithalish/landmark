<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Shop::factory(100)->create();

        $this->call([
//            RoleSeeder::class,
//            UserSeeder::class,
//            RoleUserSeeder::class,
//            CaseSeeder::class,
            VariableSeeder::class
        ]);

    }
}

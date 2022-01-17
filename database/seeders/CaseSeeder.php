<?php

namespace Database\Seeders;

use App\Models\CaseModel;
use App\Models\Cases;
use App\Models\Service;
use Illuminate\Database\Seeder;

class CaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CaseModel::factory(100)->create();

    }
}

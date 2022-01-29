<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::create([
            'title'=>'مشاور املاک دیدار',
            'avatar_path'=>'/landmark/images/partners/partner_1.jpg'
        ]);
        Partner::create([
            'title'=>'مشاور املاک رسالت',
            'avatar_path'=>'/landmark/images/partners/partner_2.jpg'
        ]);
    }
}

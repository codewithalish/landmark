<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title'=>'خدمات فروش',
            'body'=>'',

            'thumbnail_path'=>'icon icon-price-house'
        ]);
        Service::create([
            'title'=>'خدمات اجاره',
            'body'=>'',

            'thumbnail_path'=>'icon icon-rent'
        ]);
        Service::create([
            'title'=>'لیست ملک ها',
            'body'=>'',

            'thumbnail_path'=>'icon icon-painting'
        ]);
        Service::create([
            'title'=>'مدیریت ملک',
            'body'=>'',
            'thumbnail_path'=>'icon icon-safe-house'
        ]);
    }
}

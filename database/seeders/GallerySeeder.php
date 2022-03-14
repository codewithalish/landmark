<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\User;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'title'=>'admin',
            'avatar_path'=>'/landmark/images/gallery/gallery_thumb_1.jpg'
            ]);
        Gallery::create([
            'title'=>'admin',
            'avatar_path'=>'/landmark/images/gallery/gallery_thumb_2.jpg'
        ]);
        Gallery::create([
            'title'=>'admin',
            'avatar_path'=>'/landmark/images/gallery/gallery_thumb_3.jpg'
        ]);
        Gallery::create([
            'title'=>'admin',
            'avatar_path'=>'/landmark/images/gallery/gallery_thumb_4.jpg'
        ]);
        Gallery::create([
            'title'=>'admin',
            'avatar_path'=>'/landmark/images/gallery/gallery_thumb_5.jpg'
        ]);
        Gallery::create([
            'title'=>'admin',
            'avatar_path'=>'/landmark/images/gallery/gallery_thumb_6.jpg'
        ]);
        Gallery::create([
            'title'=>'admin',
            'avatar_path'=>'/landmark/images/gallery/gallery_thumb_7.jpg'
        ]);
        Gallery::create([
            'title'=>'admin',
            'avatar_path'=>'/landmark/images/gallery/gallery_thumb_8.jpg'
        ]);
    }
}

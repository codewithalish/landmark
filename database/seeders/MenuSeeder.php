<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Menu::create([
            'route' => 'posts'
        ]);

        Menu::create([
            'route' => 'cases'
        ]);
        Menu::create([
            'route' => 'agents'
        ]);
        Menu::create([
            'route' => 'users'
        ]);
        Menu::create([
            'route' => 'roles'
        ]);
        Menu::create([
            'route' => 'assign'
        ]);
        Menu::create([
            'route' => 'permissions'
        ]);
        Menu::create([
            'route' => 'comments'
        ]);
        Menu::create([
            'route' => 'contacts'
        ]);
        Menu::create([
            'route' => 'bookmarks'
        ]);
        Menu::create([
            'route' => 'feedbacks'
        ]);
        Menu::create([
            'route' => 'galleries'
        ]);
        Menu::create([
            'route' => 'newsletters'
        ]);
        Menu::create([
            'route' => 'variables'
        ]);

        Menu::create([
            'route' => 'partners'
        ]);

        Menu::create([
            'route' => 'services'
        ]);
        Menu::create([
            'route' => 'tags'
        ]);

        Menu::create([
            'route' => 'categories'
        ]);
        Menu::create([
            'route' => 'menu'
        ]);
    }
}

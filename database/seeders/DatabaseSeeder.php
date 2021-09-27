<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;
use App\Models\Category;
use App\Models\post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        user::create([
            'name' =>'asep abdul',
            'email' => 'asep@gmail.com',
            'password' => bcrypt('12345')
        ]);
        user::create([
            'name' =>'Dody',
            'email' => 'dody@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name'=>'Web Programing',
            'slug'=>'web-programing',
        ]);
        Category::create([
            'name'=>'Web desain',
            'slug'=>'web-desain',
        ]);
        Category::create([
            'name'=>'personal',
            'slug'=>'personal',
        ]);

        post::create([
            'title'=>'Judul Pertama',
            'slug'=>'judul-pertama',
            'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, aut!',
            'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum commodi itaque corrupti, optio eum qui voluptatem saepe nam fugit consequuntur adipisci quasi pariatur incidunt doloremque porro aliquid molestias quos aut aspernatur consequatur aliquam minima deleniti veritatis velit! Necessitatibus earum explicabo expedita nostrum laudantium quia similique fugit sit. Cumque, omnis libero. Modi sint fuga a itaque, libero dicta maiores officiis atque corporis iste magni at consectetur nesciunt nulla ea. Id unde ullam quidem beatae eveniet iusto quos incidunt alias, in fugit! Laborum, deserunt eos rem dolorem, repellat facere perspiciatis alias voluptatum sit molestias nihil vel doloremque ad numquam consectetur qui sequi.',
            'category_id'=>1,
            'user_id'=>1
        ]);
        post::create([
            'title'=>'Judul Kedua',
            'slug'=>'judul-kedua',
            'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, aut!',
            'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum commodi itaque corrupti, optio eum qui voluptatem saepe nam fugit consequuntur adipisci quasi pariatur incidunt doloremque porro aliquid molestias quos aut aspernatur consequatur aliquam minima deleniti veritatis velit! Necessitatibus earum explicabo expedita nostrum laudantium quia similique fugit sit. Cumque, omnis libero. Modi sint fuga a itaque, libero dicta maiores officiis atque corporis iste magni at consectetur nesciunt nulla ea. Id unde ullam quidem beatae eveniet iusto quos incidunt alias, in fugit! Laborum, deserunt eos rem dolorem, repellat facere perspiciatis alias voluptatum sit molestias nihil vel doloremque ad numquam consectetur qui sequi.',            'category_id'=>2,
            'category_id'=>2,
            'user_id'=>1
        ]);
        post::create([
            'title'=>'Judul Ketiga',
            'slug'=>'judul-ketiga',
            'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, aut!',
            'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum commodi itaque corrupti, optio eum qui voluptatem saepe nam fugit consequuntur adipisci quasi pariatur incidunt doloremque porro aliquid molestias quos aut aspernatur consequatur aliquam minima deleniti veritatis velit! Necessitatibus earum explicabo expedita nostrum laudantium quia similique fugit sit. Cumque, omnis libero. Modi sint fuga a itaque, libero dicta maiores officiis atque corporis iste magni at consectetur nesciunt nulla ea. Id unde ullam quidem beatae eveniet iusto quos incidunt alias, in fugit! Laborum, deserunt eos rem dolorem, repellat facere perspiciatis alias voluptatum sit molestias nihil vel doloremque ad numquam consectetur qui sequi.',
            'category_id'=>3,
            'user_id'=>2
        ]);
    }

}

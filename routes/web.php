<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title"=>"Halaman Home"
    ]);
});
Route::get('/user', function () {
    return view('user',[
        "title"=>"Halaman User",
        "user" =>"Asep Abdul Aziz Algifari",
        "image"=>"img/kiko_jarum.jpg"
    ]);
});



Route::get('/masage', function () {
    $blog_post = [
        [
        "artikel"   =>"Judul Post Pertama",
        "slug"      =>"judul-post-pertama",
        "author"    =>"Abdul Aziz",
        "body"      =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptates at nihil possimus ea veritatis inventore recusandae blanditiis mollitia fugit voluptate! Tempora explicabo dolores architecto, nisi iste commodi vel porro ipsum impedit dolorem nihil natus dolore voluptatem, itaque dicta sed veniam tempore magnam deserunt incidunt, quos odit velit mollitia soluta. Omnis, expedita! Sed a voluptas itaque ipsum harum, iusto libero asperiores quisquam quidem maiores, optio eos dolorem, consectetur sunt ipsam quam consequuntur assumenda cumque enim rem provident. Excepturi aliquid, harum possimus ipsum minima itaque, commodi animi voluptas quis, eum recusandae."
        ],
        [
        "artikel"   =>"Judul Post Kedua",
        "slug"      =>"judul-post-kedua",
        "author"    =>"Abdul Aziz",
        "body"      =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptates at nihil possimus ea veritatis inventore recusandae blanditiis mollitia fugit voluptate! Tempora explicabo dolores architecto, nisi iste commodi vel porro ipsum impedit dolorem nihil natus dolore voluptatem, itaque dicta sed veniam tempore magnam deserunt incidunt, quos odit velit mollitia soluta. Omnis, expedita! Sed a voluptas itaque ipsum harum, iusto libero asperiores quisquam quidem maiores, optio eos dolorem, consectetur sunt ipsam quam consequuntur assumenda cumque enim rem provident. Excepturi aliquid, harum possimus ipsum minima itaque, commodi animi voluptas quis, eum recusandae."
        ],
        [
        "artikel"   =>"Judul Post Ketiga",
        "slug"      =>"judul-post-ketiga",
        "author"    =>"Abdul Aziz",
        "body"      =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptates at nihil possimus ea veritatis inventore recusandae blanditiis mollitia fugit voluptate! Tempora explicabo dolores architecto, nisi iste commodi vel porro ipsum impedit dolorem nihil natus dolore voluptatem, itaque dicta sed veniam tempore magnam deserunt incidunt, quos odit velit mollitia soluta. Omnis, expedita! Sed a voluptas itaque ipsum harum, iusto libero asperiores quisquam quidem maiores, optio eos dolorem, consectetur sunt ipsam quam consequuntur assumenda cumque enim rem provident. Excepturi aliquid, harum possimus ipsum minima itaque, commodi animi voluptas quis, eum recusandae."
        ],
    ];
    return view('masage', [
        "title"     =>"Halaman Masage",
        "post"      =>$blog_post
    ]);
});

Route::get('/post/{slug}', function ($slug) {
    $blog_post = [
        [
        "artikel"   =>"Judul Post Pertama",
        "slug"      =>"judul-post-pertama",
        "author"    =>"Abdul Aziz",
        "body"      =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptates at nihil possimus ea veritatis inventore recusandae blanditiis mollitia fugit voluptate! Tempora explicabo dolores architecto, nisi iste commodi vel porro ipsum impedit dolorem nihil natus dolore voluptatem, itaque dicta sed veniam tempore magnam deserunt incidunt, quos odit velit mollitia soluta. Omnis, expedita! Sed a voluptas itaque ipsum harum, iusto libero asperiores quisquam quidem maiores, optio eos dolorem, consectetur sunt ipsam quam consequuntur assumenda cumque enim rem provident. Excepturi aliquid, harum possimus ipsum minima itaque, commodi animi voluptas quis, eum recusandae."
        ],
        [
        "artikel"   =>"Judul Post Kedua",
        "slug"      =>"judul-post-kedua",
        "author"    =>"Abdul Aziz",
        "body"      =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptates at nihil possimus ea veritatis inventore recusandae blanditiis mollitia fugit voluptate! Tempora explicabo dolores architecto, nisi iste commodi vel porro ipsum impedit dolorem nihil natus dolore voluptatem, itaque dicta sed veniam tempore magnam deserunt incidunt, quos odit velit mollitia soluta. Omnis, expedita! Sed a voluptas itaque ipsum harum, iusto libero asperiores quisquam quidem maiores, optio eos dolorem, consectetur sunt ipsam quam consequuntur assumenda cumque enim rem provident. Excepturi aliquid, harum possimus ipsum minima itaque, commodi animi voluptas quis, eum recusandae."
        ],
        [
        "artikel"   =>"Judul Post Ketiga",
        "slug"      =>"judul-post-ketiga",
        "author"    =>"Abdul Aziz",
        "body"      =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptates at nihil possimus ea veritatis inventore recusandae blanditiis mollitia fugit voluptate! Tempora explicabo dolores architecto, nisi iste commodi vel porro ipsum impedit dolorem nihil natus dolore voluptatem, itaque dicta sed veniam tempore magnam deserunt incidunt, quos odit velit mollitia soluta. Omnis, expedita! Sed a voluptas itaque ipsum harum, iusto libero asperiores quisquam quidem maiores, optio eos dolorem, consectetur sunt ipsam quam consequuntur assumenda cumque enim rem provident. Excepturi aliquid, harum possimus ipsum minima itaque, commodi animi voluptas quis, eum recusandae."
        ],
    ];

    $new_post;
    foreach($blog_post as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        "title"     =>"Singgle Post",
        "post"      => $new_post
    ]);
});
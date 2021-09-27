<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\post;

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



Route::get('/masage', [postController::class, 'index']);
Route::get('/post/{post:slug}', [postController::class, 'show']);

Route::get('/category/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'post' => $category->post,
        'category' => $category->name
    ]);
});
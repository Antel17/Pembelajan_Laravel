<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        return view('masage', [
            "title"     =>"All Post",
            "post"      => post::with(['user', 'category'])->latest()->get()
        ]);
    } 

    public function show(post $post)
    {
        return view('post', [
            "title"     =>"Singgle Post",
            "post"      => $post
        ]);
    }
}

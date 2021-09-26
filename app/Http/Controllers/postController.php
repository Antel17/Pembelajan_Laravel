<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        return view('masage', [
            "title"     =>"Halaman Masage",
            "post"      => post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title"     =>"Singgle Post",
            "post"      => post::find($slug)
        ]);
    }
}

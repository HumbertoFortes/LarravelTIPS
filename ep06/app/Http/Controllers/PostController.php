<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function debug(Request $request)
    {
        $post = new Post();
        $post->create($request->except('_token'));
    }
}

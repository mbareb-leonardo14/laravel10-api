<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
    {
    public function index()
        {
        // get all post from model
        $posts = Post::latest()->get();

        // passing post to view
        return view('posts', compact('posts'));
        }
    }

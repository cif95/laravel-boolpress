<?php

namespace App\Http\Controllers\Api;
use App\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();
        return response()->json([
            'results' => $posts,
        ]);
    }
}

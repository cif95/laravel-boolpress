<?php

namespace App\Http\Controllers\Api;
use App\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {

        $posts = Post::with(['categories'])
        ->paginate(3);
        return response()->json($posts);
    }
}

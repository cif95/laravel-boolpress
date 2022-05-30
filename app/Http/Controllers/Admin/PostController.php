<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'title' => 'required|max:100|min:4',
            'description' => 'required|max:250|min:50',
            'image' => 'required|max:2048',
        ]);

        $data = $request->all();

        $data['author'] = Auth::user()['name'];


        $newPost = new Post();
        
        $newPost->fill($data);

        // input file upload
        $newPost->image_url = Storage::put('uploads', $data['image']);

        // save the new post
        $newPost->save();

        // add the selected categories to the new post
        $newPost->categories()->attach($data['category']);

        // route redirect with message
        return redirect()->route("admin.posts.index")->with('message', 'Post created correctly');
    }

    /**
     * Display the specified resource.
     *
     * @param  Post 
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', ['categories'=> $categories, 'post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        
        $request->validate([
            'title' => 'required|max:100|min:4',
            'description' => 'required|max:250|min:50',
            'image' => 'required|max:2048',
        ]);

        $data = $request->all();

        $data['author'] = Auth::user()['name'];
        $post->categories()->sync($data['category']);
        // input file upload
        $post->image_url = Storage::put('uploads', $data['image']);
        $post->update($data);

        return redirect()->route("admin.posts.show", $post)->with('message', 'Post updated correctly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route("admin.posts.index")->with('message', 'Post deleted correctly');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
//    public function show()
//    {
//        $title = 'title';
//        $posts = Post::all(); // select * from posts
//        $post = Post::findOrFail(1); // select * from posts where id = $id
//        return view('post.index', compact('posts', 'post'));
//    }

    public function index()
    {
        $posts = Post::all();
        return view('back.posts.index',
            compact('posts'));

    }

    public function create()
    {
        return view('back.posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('posts');
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view('back.posts.show', compact('post'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Post;
use App\Repositories\Posts;
use function auth;
use function compact;
use function redirect;
use function request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Posts $posts)
    {
        $posts = $posts->all();
//        $posts = Post::latest();
//
//        if ($request = request(['month', 'year'])) {
//            $posts->filter($request);
//        }
//
//        $posts = $posts->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        return redirect('/');
    }

}

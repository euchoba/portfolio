<?php

namespace App\Http\Controllers;
use App\Post;
use function redirect;
use function request;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show()
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        Post::create(request(['title', 'body']));

        return redirect('/');
    }

}

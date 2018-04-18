<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use function auth;
use Illuminate\Http\Request;
use function redirect;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(\request(), [
            'body' => 'required|min:2'
        ]);
        $post->addComment(\request('body'));

        return back();
    }
}

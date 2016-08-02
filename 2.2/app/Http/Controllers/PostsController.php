<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getAll() {
        return 'all posts';
    }

    public function getPost($postId) {
        return 'post with id: ' . $postId;
    }
}

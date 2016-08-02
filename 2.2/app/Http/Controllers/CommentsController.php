<?php

namespace App\Http\Controllers;

class CommentsController extends Controller
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

    public function getComment($postId, $commentId) {
        return 'Hello, ' . $postId . " comment: " . $commentId;
    }
}

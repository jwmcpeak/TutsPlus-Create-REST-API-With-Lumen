<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->group(['prefix' => 'posts'], function() use ($app) {
    $app->get('/', function() {
        return 'all posts';
    });

    $app->get('{post}', function($postId) {
        return 'post with id: ' . $postId;
    });

    $app->get('{post}/comments/{comment}', function ($postId, $commentId) {
        return 'Hello, ' . $postId . " comment: " . $commentId;
    });
});



$app->post('/', function() {
    return 'Hello, Post request handled by Lumen';
});

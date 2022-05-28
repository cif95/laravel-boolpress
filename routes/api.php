<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/posts')->namespace('Api')->group(function() {
    Route::get('', 'PostsController@index');
    Route::get('/{post}', 'PostsController@show');
});
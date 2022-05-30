<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::middleware('auth')
->namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});


Route::get('/contact', 'Guest\ContactController@contact')->name('guest.contact');
Route::post('/contact', 'Guest\ContactController@contactSend')->name('guest.storeContact');


Route::get('/{any}', 'HomeController@index')->where('any','.*');
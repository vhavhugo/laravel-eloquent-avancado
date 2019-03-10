<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/post/{post}', 'Site\PostController@show')->name('posts.public.show');
Route::get('/', 'Site\PostController@index')->name("home");

Route::post('comments/{post}', 'Site\CommentController@store')->name('comments.store');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('posts', 'Admin\PostController');
});

Route::get('/contato', function() {
    return view('contact.index');
});





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

Route::get('/', function () {
    return view('welcome');
});
// "vue": "^2.5.17",

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/topic/create', 'TopicsController@create')->name('create');
Route::post('/topic/create', 'TopicsController@store')->name('create');

Route::get('/topic', 'TopicsController@index')->name('index');
Route::get('/topic/{id}', 'TopicsController@show')->name('show');
Route::get('/me/topic', 'TopicsController@mine')->name('my_topics');
Route::get('/me/comments', 'TopicsController@myComments')->name('my_comments');

Route::post('/comment', 'CommentsController@postComment')->name('comment');


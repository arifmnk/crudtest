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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'PostController@create')->name('nps');
Route::post('/post', 'PostController@store')->name('storepost');
Route::get('/post/{postid}', 'PostController@edit')->name('editpost');
Route::post('/post/{postid}', 'PostController@update')->name('updatepost');
Route::delete('/delete/post/{postid}','PostController@destroy')->name('kitadestroy');

Route::resource('story','StoryController');
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

Route::get('/koding', function () {
  return view('home');
});

Route::get('/blog', 'BlogController@index');
// create
Route::get('/blog/create', 'BlogController@create');
Route::post('/blog', 'BlogController@store');
// end create
Route::get('/blog/{id}', 'BlogController@detail');
// Update
Route::get('/blog/{id}/edit', 'BlogController@edit');
Route::put('/blog/{id}', 'BlogController@update');
// end update
// delete
Route::delete('/blog/{id}', 'BlogController@destroy');


/**
 * Sample 2 
 */

Route::get('/pages', 'PagesController@index');
Route::get('/pages/about', 'PagesController@about');
Route::get('/pages/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
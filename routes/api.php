<?php

use Illuminate\Http\Request;
use App\Models\Api\Article;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Create API
 */
/*Route::get('articles', function(){
	return Article::all();
});
Route::get('articles/{id}', function(){
	return Article::find($id);
});
Route::post('articles', function(Request $request){
	return Article::create($request->all);
});
Route::put('articles/{id}', function(Request $request, $id){
	$article = Article::findOrFail($id);
	$article->update($request->all());
	return $article;
});
Route::delete('articles/{id}', function($id){
	Article::find($id)->delete();
	return 204;
});*/


// list articles
Route::get('articles', 'ArticleController@index');

// list single article
Route::get('article/{id}', 'ArticleController@show');

// create new article
Route::post('article', 'ArticleController@store');

// update article
Route::put('article', 'ArticleController@store');

// Delete Article
Route::delete('article/{id}', 'ArticleController@destroy');



/*USERS API*/
// get Users 
Route::get('users' , 'Api\UserController@users');
// Auth Register
Route::post('auth/register', 'Api\AuthController@register');
// Auth Login
Route::post('auth/login', 'Api\AuthController@login');
// show profil user
Route::get('users/profile', 'Api\UserController@profile')->middleware('auth:api');
// show profile by id untuk users yang memiliki credentiol
Route::get('users/{id}', 'Api\UserController@profileById')->middleware('auth:api');
// List Post Add
Route::post('postapi', 'Api\PostapiController@add')->middleware('auth:api');
// edit post
Route::put('postapi/{postapi}', 'Api\PostapiController@update')->middleware('auth:api');
// Delete Post
Route::delete('postapi/{postapi}', 'Api\PostapiController@delete')->middleware('auth:api');

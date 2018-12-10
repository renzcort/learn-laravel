<?php

use Illuminate\Http\Request;
use App\Models\Article;


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


Route::get('articles', 'ArticleController@index');
Route::get('articles/{id}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{id}', 'ArticleController@update');
Route::delete('articles/{id}', 'ArticleController@delete');

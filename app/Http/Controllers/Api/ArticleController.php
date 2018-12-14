<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Api\Article;
use App\Http\Resources\Api\Article as ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get Articles
        $articles = Article::paginate(15);

        // return collection of article as a resource
        return ArticleResource::collection($articles);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $article = $request->isMethod('put') ? Article::findOrFail($request->id) : new Article;

      $article->id = $request->input('id');
      $article->title = $request->input('title');
      $article->body = $request->input('body');
      if ($article->save()) {
        return new ArticleResource($article);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        // retrun single article as a resource
        return new ArticleResource($article);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if ($article->delete()) {
          // retrun single article as a resource
          return new ArticleResource($article);
        }
    }
}

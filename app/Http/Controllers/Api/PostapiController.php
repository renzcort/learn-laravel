<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// add models
use App\Models\Api\PostApi;
use App\Transformers\PostapiTransformer;
use Auth;

class PostapiController extends Controller
{
    public function add(Request $request, PostApi $postapi)
    {
      $this->validate($request, [
        'content' =>  'required|min:10',
      ]);

      $postapi = $postapi->create([
        'user_id' =>  Auth::User()->id,
        'content' =>  $request->content,
      ]);

      $response = fractal()
        ->item($postapi)
        ->transformWith(new PostapiTransformer)
        ->toArray();

      return response()->json($response, 201);
    }

    public function update(Request $request, PostApi $postapi)
    {
      // dd($postapi);
      // add Policy
      $this->authorize('update', $postapi);
      $postapi->content = $request->get('content', $postapi->content);
      $postapi->save();

      return fractal()
        ->item($postapi)
        ->transformWith(new PostapiTransformer)
        ->toArray();  
    }


    // Delete
    public function delete(PostApi $postapi)
    {
      // Autorize user
      $this->authorize('delete', $postapi);
      $postapi->delete();
      return response()->json([
        'message' =>  'Post Delete'
      ]);
    }
}

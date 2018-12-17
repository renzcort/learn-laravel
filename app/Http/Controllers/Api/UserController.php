<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// add responses 
use App\Http\Requests;
// add models
use App\User;
// add transformers Fractal
use App\Transformers\UserTransformer;
use Auth;

class UserController extends Controller
{
    public function users(user $user) 
    {
      $users = $user->all();
      /*
        get data by json
       */ 
      // return response()->json($users);
      return fractal()
        ->collection($users)
        ->transformWith(new UserTransformer)
        ->toArray();
    }

    public function profile(user $user)
    {
      $user = $user->find(Auth::user()->id);
      return fractal()
        ->item($user)
        ->transformWith(new UserTransformer)
        ->toArray();
    }
}

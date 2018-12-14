<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// add responses 
use App\Http\Requests;
// add models
use App\User;
// add transformers Fractal
use App\Transformers\UserTransformer;

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
}

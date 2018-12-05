<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get post by user id auth
        $user_id = auth()->user('id')->id;
        $user = User::find($user_id);
        /*end*/
        return view('dashboard')->with('posts', $user->posts);
    }
}

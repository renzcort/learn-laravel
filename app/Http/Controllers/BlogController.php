<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

// call model 
use App\Models\Blog;

class BlogController extends Controller
{
  public function index() {
    // save without eloquint
    /*$blog = new Blog;
    $blog->title = 'Hallo Bandung';
    $blog->description = 'This is bandung description';
    $blog->save();*/


    // eith eloquent
    /*Blog::create([
      'title' => 'Hallo Bekasi barat Kota baru',
      'description' => 'ini bekasi Kota description',
      'created_at' => '2018-11-19 14:04:07',
      'updated_at' => '2018-11-19 14:04:07'
    ]);*/

    // update with eloquent
    /*$blog = Blog::where('title', 'hallo bekasi')->first();
    $blog->title = 'Hallo Sukabumi';
    $blog->save();*/

    // Update by Eloquentt
    // Blog::find(10)->update([
    //   'title' => 'Hallo Surabaya'
    // ]);

    // delete by Eloquent
    // Blog::destroy([8, 9]);

    // Soft deletes / trash
    /*$blog = Blog::find(4);
    $blog->delete(); */

    // Restore Soft Deletes
    // Blog::withTrashed()->restore();


    // metode eloquent get data
    $blogs = Blog::all();
    return view('blog/index', ['blogs' => $blogs]);
  }   

  // details
  public function detail($id) {
    //  $nilai = "Ini Adalah link dari ".$id ;
    // $users = ['Rendi Saputra', 'agung', 'putra'];

    // insert
    /*DB::table('users')->insert([
      ['username' => 'putra', 'password' => '345'],
      ['username' => 'saputra', 'password' => '34567'],
    ]);*/

    // Update
    // DB::table('users')->where('username', 'putra')->update([
    //   'username' => 'testing'
    // ]);

    // Delete
    // DB::table('users')->where('username', 'testing')->delete();

    // $users = DB::table('users')->where('username', 'rendi')->get();
    /*$users  = DB::table('users')->get();
    dd($users);
    $unescape = '<script>alert("x");</script>';
    return view('blog/detail', ['blog' => $nilai, 'users' => $users, 'unescape' => $unescape]);*/
    /*END CoDE FIRST*/

    /*Show Blog*/
    $blog = Blog::find($id);

    // redirect 404
    if (!$blog) {
      abort(404);
    }

    return view('blog/detail', ['blog' => $blog]);
  }

  // create
  public function create() {
    return view('blog/create');
  }

  // store
  public function store(Request $request) {
    // get validation
    $this->validate($request, [
      'title'       =>  'required|min:5',
      'description' =>  'required|min:5|max:100'
    ]);

    $blog = new Blog;
    $blog->title        = $request->title;
    $blog->description  = $request->description;
    $blog->save();
    return redirect('blog');
  }


  // update 
  public function edit($id) {
   $blog = Blog::find($id);
    // redirect 404
    if (!$blog) {
      abort(404);
    }
    return view('blog/edit', ['blog' => $blog]); 
  }

  public function update(Request $request, $id) {
    $blog = Blog::find($id);
    $blog->title = $request->title;
    $blog->description = $request->description;
    $blog->save();
    return redirect('blog/'. $id);
  }

  // delete
  public function destroy($id) {
    $blog = Blog::find($id);
    $blog->delete();
    return redirect('blog');
  }
}

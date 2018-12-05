<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\User;
use DB;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

    public function __construct()
    {
        // Akses Control
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      // $posts = Post::all();
      // $posts = Post::orderBy('title', 'desc')->get();
      /**
       * If you want get specific 
       */
      // $posts = Post::orderBy('title', 'desc')->take(1)->get();
      // $posts = DB::select('Select * FROM posts');
      /*paginate*/
      $posts = Post::orderBy('created_at', 'desc')->paginate(10);
      /*end paginate*/
      return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save data
        $this->validate($request, [
          'title' => 'required',
          'body' => 'required',
          'cover_image' =>  'image|nullable|max:1999'
        ]);

        // handle file upload
        if ($request->hasFile('cover_image')) {
          // Get Fileneme with the Ext
          $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
          // Get Just Filename
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          // get Just Ext
          $extension = $request->file('cover_image')->getClientOriginalExtension();
          // filename to store
          $fileNameTOStore = $filename.'_'.time().'.'.$extension;
          // upload image
          $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameTOStore);
        } else {
          $fileNameTOStore = 'noimage.jpg';
        }

        // create Post
        $post = new Post;
        $post->title = $request->input('title'); 
        $post->body = $request->input('body');
        // get auntification
        $post->user_id = auth()->user()->id;
        // upload file
        $post->cover_image = $fileNameTOStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Edit Form
        $post = Post::find($id);

        // check for current user
        if (auth()->user()->id !== $post->user_id) {
          return redirect('/posts')->with('error', 'Unauthorized page');
        }

        return view('posts.edit')->with('post', $post);
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
        //update form
        $this->validate($request, [
          'title' => 'required',
          'body'  => 'required'
        ]);


        // handle file upload
        if ($request->hasFile('cover_image')) {
          // Get Fileneme with the Ext
          $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
          // Get Just Filename
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          // get Just Ext
          $extension = $request->file('cover_image')->getClientOriginalExtension();
          // filename to store
          $fileNameTOStore = $filename.'_'.time().'.'.$extension;
          // upload image
          $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameTOStore);
        } 

        // get id
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
         // upload file
        if ($request->hasFile('cover_image')) {
          $post->cover_image = $fileNameTOStore;
        }
        $post->save();
        return redirect('/posts')->with('success', 'Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete row
        $post = Post::find($id);

        // check for current user
        if (auth()->user()->id !== $post->user_id) {
          return redirect('/posts')->with('error', 'Unauthorized page');
        }

        // delete upload 
        if ($post->cover_image != 'noname.jpg') {
          // Delete Image
          Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post Deleted');
    }
}

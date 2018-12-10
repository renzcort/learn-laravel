@extends('layouts.myapp')

@section('content')
  <h1>Posts</h1>
  @if(count($posts) > 0)
    @foreach($posts as $post)
      <div class="well"> 
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <img src="/storage/cover_images/{{ $post->cover_image }}" alt="placeholder+image" style="width: 100%">
          </div>
          <div class="col-sm-8 col-sm-8">
            <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
            <small>Written On {{ $post->created_at }} by {{ $post->user->name }} </small>
          </div>
        </div>
      </div>
    @endforeach
    {{ $posts->links() }}
  @else 
    <p>No Post Found</p>
  @endif
@endsection

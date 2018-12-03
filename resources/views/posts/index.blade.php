@extends('layout.myapp')

@section('content')
  <h1>Posts</h1>
  @if(count($posts) > 1)
    @foreach($posts as $post)
      <div class="well"> 
        <h3>{{ $post->title }}</h3>
      </div>
    @endforeach
  @else 
    <p>No Post Found</p>
  @endif
@endsection

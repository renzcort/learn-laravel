@extends('layout.default')

@section('title', 'My Blog')

@section('content')
  <h1>Selamat datang di blog kami</h1>

  <hr>
  <ul>
  @foreach($blogs as $blog)
    <li><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></li>
  @endforeach
</ul>
@endsection 
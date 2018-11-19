@extends('layout.default')

@section('title', 'Single Blog')

@section('content')
  <h1>Selamat datang di blog detail</h1>

  <form action="/blog/{{ $blog->id }}" method="POST">
    
  </form>

  <h2>{{ $blog->title }}</h2>
  <hr>
  <p>{{ $blog->description }}</p>

@endsection
@extends('layout.default')

@section('title', 'Single Blog')

@section('content')
  <h1>Selamat datang di blog detail</h1>

  <form action="/blog/{{ $blog->id }}" method="post">
    <input type="text" name="title" value="{{ $blog->title }}"><br>
    <textarea name="description" rows="8" cols="40">{{ $blog->description }}</textarea><br> 
    <input type="submit" name="submit" value="Update">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
  </form>

@endsection
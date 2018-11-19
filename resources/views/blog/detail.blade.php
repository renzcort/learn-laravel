@extends('layout.default')

@section('title', 'Single Blog')

@section('content')
  <h1>Selamat datang di blog detail</h1>

  <h2>{{ $blog->title }}</h2>
  <hr>
  <p>{{ $blog->description }}</p>

@endsection
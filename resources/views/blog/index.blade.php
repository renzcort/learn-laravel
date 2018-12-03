@extends('layout.default')

@section('title', 'My Blog')

@section('content')
  <h1>Selamat datang di blog kami</h1>

  <hr>
  <ul>
  @foreach($blogs as $blog)
    <li>
      <a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a>
      <form action="/blog/{{ $blog->id }}" method="post">
        <input type="submit" name="submit" value="Delete">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
      </form>
    </li>
  @endforeach
</ul>
@endsection 
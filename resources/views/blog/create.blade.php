@extends('layout.default')

@section('title', 'Single Blog')

@section('content')
  <h1>Create Blog</h1>
  <!-- error -->
  @if(count($errors) > 0)
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif
  <form action="/blog" method="post">
    {{ csrf_field() }}
    <input type="text" name="title" value="{{ old('title') }}"><br>
    @if($errors->has('title'))
      <p>{{ $errors->first('title') }}</p>
    @endif
    <textarea name="description" rows="8" cols="40">{{ old('description') }}</textarea><br>
    @if($errors->has('description'))
      <p>{{ $errors->first('description') }}</p>
    @endif 
    <input type="submit" name="submit" value="Create">
  </form>

@endsection
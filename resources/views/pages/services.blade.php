@extends('layouts.myapp')

@section('content')
  <h1>{{$title}}</h1>
  @if(count($services) > 0)
    <ul class="list-group">
    @foreach($services as $service)
      <li>{{ $service }}</li>      
    @endforeach
    </ul>
  @endif
  <p>thie is laravel from stract youtube series</p>
@endsection
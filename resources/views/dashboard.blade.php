@extends('layouts.myapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h1>Your Blog Posts</h1>
                    @if (count($posts) > 0)
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($posts as $post)
                        <tr>
                          <td>{{ $post->title }}</td>
                          <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a></td>
                          <td>
                            {{-- delete --}}
                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                              {{ Form::hidden('_method', 'DELETE') }}
                              {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {!! Form::close() !!}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    @else
                      <p>You Have No Posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

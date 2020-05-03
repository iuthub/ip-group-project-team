@extends('layouts.app')

@section('content')
  <div style="margin: 0 0 30px 0;">
    <a class="btn my-2" href="/posts" style="background: #f1f1f1;">Go Back</a>
    <div class="jumbotron">
      <h1>{{ $post->title }}</h1>
      <img src='/storage/cover_images/{{$post->cover_image}}' class="img-fluid" style="width: 100%;">
      <hr style="margin: 30px 0">
      <div class="my-3">
        {!!$post->body!!}
      </div>
      <small> Written on {{$post->created_at}} </small>
      

      @if(Auth::user()->email == 'jasur.khakimov9@gmail.com')
      <hr>
      <a href="/posts/{{$post->id}}/edit" class="btn btn-default" style="background: #fefefe;"> Edit </a>
      {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class' => 'float-right'])!!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
      {!!Form::close()!!}
      @endif
    </div>
  </div>
@endsection
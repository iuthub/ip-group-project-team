@extends('layouts.app')

@section('content')

  <h1 style="margin: 0 0 30px 0;">Blog</h1>
  @if(count($posts) > 0)
    @foreach ($posts as $post)
        <div class="jumbotron" style="max-height: 500px;">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <img src='/storage/cover_images/{{$post->cover_image}}' class="img-fluid">
              </div>
              <div class="col-md-8 col-sm-8">
                <h3><a href="/posts/{{$post->id}}"> {{$post->title}} </a></h3>
                <small> Written on {{$post->created_at}} </small>
                <p style=""> {!! str_limit($post->body, 700)!!} 
                </p>
              </div>
              
            </div>
        </div>
    @endforeach
    {{$posts->links()}}
  @else
    <h3> No post found </h3>
  @endif


@endsection
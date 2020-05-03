@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->email == 'jasur.khakimov9@gmail.com')
    <a href='/posts/create' class="btn btn-primary text-light mb-3">Create New Post</a>
    <h3> All Blog Posts </h3>
    @if(count($posts) > 0)
    <table class="table table-striped">
        <tr>
            <th> Title </th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td> <a href="/posts/{{$post->id}}/"> {{$post->title}} </a></td>
            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning"> Edit </a></td>
            <td>
                {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class' => 'float-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </td>
        </tr>
        @endforeach

    </table>
    @else
        <h1> You do not have any Posts </h1>
    @endif
    @endif

</div>
@endsection

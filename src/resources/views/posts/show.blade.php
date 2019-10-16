@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-secondary mb-5">Go Back</a>
    <h1 class="mb-4">{{$post->title}}</h1>
    <img src="/storage/cover_images/{{$post->cover_image}}" class="mb-5" style="width: 100%; max-height: 500px; object-fit: cover">
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    <div class="d-flex justify-content-end align-items-center mt-3">
        @auth
            @if(Auth::id() === $post->user->id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary mr-2">Edit</a>

                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE'])!!}
                    {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                {!!Form::close()!!}
            @endif
        @endauth
    </div>
@endsection

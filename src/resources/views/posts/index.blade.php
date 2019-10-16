@extends('layouts.app')

@section('content')
    <h1 class="mb-5">Posts</h1>


    @if(count($posts) > 0)
        <div class="posts-card-wrapper">
            @foreach($posts as $post)
                <div class="card">
                    <a href="/posts/{{$post->id}}" class="stretched-link"></a>
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="/storage/cover_images/{{$post->cover_image}}" class="card-img" >
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p class="card-text text-secondary">{{$post->created_at}} by {{$post->user->name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{$posts->links()}}

    @else
        <p>No posts found</p>
    @endif
@endsection

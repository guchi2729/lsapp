@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    <br>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4" style="height:150px">
                            <a href="/posts/{{$post->id}}">
                            <img style="width:100%; max-width:300px; max-height:150px" src="/storage/cover_images/{{$post->cover_image}}">
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
@extends('layouts.app')

@section('content')
<div class="blog-page">
    <div class="container">
        <h1>Recent Posts</h1>
        @if(count($posts) > 0)
            @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">
                    <h5><a href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h5>
                </div>
                <div class="card-body">
                    <p class="lead">{{$post->body}}</p>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            </div>
            @endforeach
            {{$posts->links()}}  <!-- For Pagination -->
        @else
            <p>No posts found!</p>
        @endif
    </div>
</div>
@endsection
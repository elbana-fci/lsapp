@extends('layouts.app')

@section('content')
<div class="dashboard">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span>Dashboard</span>
                        <a href="/lsapp/public/posts/create" class="btn btn-default">Create post</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h5>My Blog Posts</h5>
                    </div>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            @foreach($posts as $post)
                            <tr>
                                <th>{{$post->title}}</th>
                                <th><a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn edit-btn">Edit</a></th>
                            </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

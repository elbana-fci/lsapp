@extends('layouts.app')
@section('content')
<div class="projects">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span>My projects</span>
                        <a href="projects/create" class="btn btn-default">Create project</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <p>You have no projects</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
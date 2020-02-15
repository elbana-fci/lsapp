@extends('layouts.app')

@section('content')
<div class="services-page">
    <div class="container">
        <h1>{{$title}}</h1>
        @if(count($services) > 0)
            <ul class="list-group">
                @foreach($services as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        @endif

        <div id="app">
            <articles></articles>
        </div>
        
    </div>
</div>

@endsection
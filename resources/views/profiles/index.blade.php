@extends('layouts.app')
@section('content')
<div class="profile">

    <!--<img src="images/pexels-photo-196644.jpeg" alt="" width="100%" height="250px">-->
        <div class="container">
            <div class="row">
                <div class="profile-header">
                    <img src="" alt="" class="profile-img">
                    <span>{{$user->name}}</span>
                    <div class="profile-links">
                        <ul>
                            <li><a href="">About</a></li>
                            <li><a href="">Team</a></li>
                            <li><a href="">Projects</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <table class="table table-striped">
            <tr>
                <th>Name</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{$user->created_at}}</td>
            </tr>
        </table>
        <br/>
</div>
@endsection
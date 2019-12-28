@extends('layouts.app')
@section('content')
<div class="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-header">
                    <img src="images/nicolas.jpg" alt="" class="profile-img img-responsive img-thumbanil">
                    <span class="profile-uname">{{$user->name}}</span>
                    <span class="profile-email">{{$user->email}}</span>
                    <div class="profile-links">
                        <ul>
                            <li><a href="">About</a></li>
                            <li><a href="">Team</a></li>
                            <li><a href="projects">Projects</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row profile-body">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Personal Information</div>
                    <div class="card-body">
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
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">Service Details</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Storage used</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Applications</th>
                                <td>App name</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
</div>
</div>
@endsection
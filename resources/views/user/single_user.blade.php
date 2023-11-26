@extends('layouts.layout')
@section('title','')
@section('content')
        <div class="container">
            <div class="row">
                <!-- First Section - User Photo and Links -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <img src="" alt="indevelopment"/>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title text-center">{{$user->name}}</h1>
                            <p class="text-start">surname:example</p>
                            <p class="text-start">phone:example</p>
                            <p class="text-start">email:example</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">

                            <div><a class="btn btn-primary">edit user</a></div>
                            <div><a class="btn btn-dark  text-warning" href="{{route('manage',$user->id)}}"><i class="bi bi-kanban"></i> manage post</a></div>
                        </div>
                    </div>
                </div>

                <!-- Second Section - List of Posts -->
                <div class="col-lg-8">
                    <h2>My Posts</h2>
                    <ul class="list-group">
                        @foreach($posts as $post)
                        <li class="list-group-item">
                                    <h3> <a href="{{route('single_post',$post->id)}}"
                                    class="text-decoration-none text-dark"
                                    >{{$post->title}}</a></h3>
                                <p>description:</p>
                        </li>
                        @endforeach
                        <!-- Add more posts here -->
                    </ul>
                </div>
            </div>
        </div>
@endsection

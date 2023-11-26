@extends('layouts.layout')
@section('title','moderationoptions')
@section('content')
    <div class="row  text-center g-4">
        <div class="col-md-6 col-md" >
            <div class="card bg-success  text-light">
                <div class="card-header">
                    <h2 class="text-center">
                        <a class="link-warning" href="{{route('users_for_moderator')}}">
                            users
                        </a>
                    </h2>
                </div>
                <div class="card-body">
                    <p>Check user status Change Block and make user a moderator
                    </p>
                </div>
                <div class="card-footer">
                    <i class="bi bi-people-fill"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-md" >
            <div class="card bg-primary  text-light">
                <div class="card-header">
                    <h2 class="text-center">
                        <a class="link-light" href="{{route('posts_for_moderator')}}">
                            posts
                        </a>
                    </h2>
                </div>
                <div class="card-body">
                    <p>Check user status Change Block and make user a moderator
                    </p>
                </div>
                <div class="card-footer">
                    <i class="bi bi-people-fill"></i>
                </div>
            </div>
        </div>
    </div>


@endsection

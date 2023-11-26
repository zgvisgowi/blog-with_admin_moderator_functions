@extends('layouts.layout')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <h2 class="text-center">Admin Login</h2>
        <form action="{{route('admin_login')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="email" placeholder="Enter username">
                @error('email')
                <p class="alert-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</div>
@endsection

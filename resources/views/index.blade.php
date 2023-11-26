@extends('layouts.layout')
@section('title','index')

@section('content')
    <div class="container">
        <div class="row  text-center g-4">
                @foreach($posts as $post)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <!-- Post Image -->
                        <img src="{{$post->image ?  asset('storage/'.$post->image):asset('/images/no-image.jpg') }}" class="card-img-top" alt="{{ $post->title }}">

                        <div class="card-body">
                            <!-- Post Title -->
                            <h5 class="card-title">{{ $post->title }}</h5>

                            <!-- Author's Name -->
                            <p class="card-text text-muted">By </p>

                            <!-- You can add more content here if needed -->
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
@endsection

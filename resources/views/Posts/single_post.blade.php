@extends('layouts.layout')
@section('content')
    @include("partial.modal.delete_modal")
    <!-- Main Content Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post Content -->
                <article>
                    <div class="d-md-flex">
                        <h2>{{$post->title}}</h2>
                        @can('chack',$post)
                        <div class="mb-3 ">
                            <a href="{{route('edit_post',$post->id)}}" class="btn btn-outline-primary"><i class="bi bi-pencil"></i></a>
                            <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-trash-fill"></i></button>
                        </div>
                        @endcan
                    </div>
                    <a href="{{route('single_user',$post->user_id ?? 1)}}">Posted by Author on Date</a>
                    <p>{{$post->content}}</p>
                </article>
                <!-- Comments Section -->
                @include('partial.comments')
                @include('partial.create_comments')
                <!-- Comment Form -->
            </div>
            <div class="col-lg-4">
                <!-- Sidebar (optional) -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Related Posts</h5>
                        <!-- Add links to related posts or other content here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

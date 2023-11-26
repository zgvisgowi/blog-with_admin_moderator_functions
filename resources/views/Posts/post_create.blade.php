@extends('layouts.layout')
@section('title','create post')
@section('content')
    <div class="container mt-5">
        <h1>Create a Post</h1>

        <!-- Post Creation Form -->
        <div class="card p-3">

        <div class="card-body">
            <form method="post" action="{{route('store_post')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="postTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="postTitle" placeholder="Enter a title for your post" value="{{old('title')}}">
                    @error('title')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="postTitle" class="form-label">description</label>
                    <input type="text" class="form-control" name="description" id="postTitle" placeholder="description" value="{{old('description')}}">
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Choose an image:</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="postContent">Content</label>
                    <textarea class="form-control" id="postContent" rows="5" placeholder="Write your post content here" name="content">{{old('content')}}
                    </textarea>
                    @error('content')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <input type="hidden" name="image" value="1n" >
                <button type="submit" class="btn btn-primary">Publish</button>
                </form>
            </div>
        </div>
    </div>
@endsection

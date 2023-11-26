@extends('layouts.app')
@section('title','title')
@section('content')
    <div class="container mt-5">
        <h1>update "{{$post->title}}"</h1>
        <!-- Post Creation Form -->
        <form method="post" action="{{route('update_post',$post->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="postTitle" class="form-label">Title</label>
                <input type="text"
                       class="form-control"
                       name="title" id="postTitle"
                       placeholder="Enter a title for your post"
                       value="{{$post->title}}"
                >
                @error('title')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="postContent">Content</label>
                <textarea class="form-control"
                          id="postContent"
                          rows="5"
                          placeholder="Write your post content here"
                          name="content"
                >
                    {{$post->content}}
                </textarea>
                @error('content')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <input type="hidden" name="image" value="1n" >
            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
    </div>
@endsection

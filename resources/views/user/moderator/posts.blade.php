@extends('layouts.layout')
@section('title','posts')
@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>
                    active
                </th>
                <th>blocked</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}} </td>
                    <form action="{{route('moderator_post_status_change',$post->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <td><input type="radio"
                                   name="status"
                                   value="0"
                                   @if($post->status==0)
                                       checked
                                @endif
                            ></td>
                        <td><input type="radio"
                                   name="status"
                                   value="1"
                                   @if($post->status==1)
                                       checked
                                @endif
                            ></td>
                        <td>
                            <input type="radio"
                                   name="status"
                                   value="2"
                                   @if($post->status==2)
                                       checked
                                @endif
                            >

                        </td>
                        <td><input type="submit" value="save"></td>
                    </form>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection

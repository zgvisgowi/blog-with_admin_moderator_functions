@extends('admin.layout.layout')
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
                    <form action="{{route('post_status_change',$post->id)}}" method="post">
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
                    <td>
                        <form action="{{Route('admin_post_delete',$post->id)}}" method="Post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">delete</button>
                        </form>
                    </td>




            @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@extends('admin.layout.layout')
@section('content')
    <div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>name surname(username)</th>
            <th>user</th>
            <th>
                moderator
            </th>
            <th>bloked</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}} {{$user->surname}}({{$user->username}})</td>
                    <form action="{{route('user_status_change',$user->id)}}" method="post">
                        @csrf
                        @method('PUT')
                    <td><input type="radio"
                               name="status"
                               value="0"
                               @if($user->status==0)
                                   checked
                               @endif
                        ></td>
                    <td><input type="radio"
                               name="status"
                               value="1"
                               @if($user->status==1)
                                   checked
                               @endif
                        ></td>
                    <td><input type="radio"
                               name="status"
                               value="2"
                                @if($user->status==2)
                                    checked
                                @endif
                        ></td>
                        <td><input type="submit" value="save"></td>
                    </form>
                    <td>
                    <td>
                        <form action="{{Route('admin_post_delete',$user->id)}}" method="Post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">delete</button>
                        </form>
                    </td>
                    </td>

                </tr>

            @endforeach
        </tbody>
    </table>
    </div>

@endsection

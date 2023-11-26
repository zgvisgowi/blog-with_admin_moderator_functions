@extends('layouts.layout')
@section('title','users')
@section('content')
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>name surname(username)</th>
                    <th>user</th>

                    <th>bloked</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    @if($user->status!=1)
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
                                       value="2"
                                       @if($user->status==2)
                                           checked
                                    @endif
                                ></td>
                            <td><input type="submit" value="save"></td>
                        </form>
                        <td>
                        </td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>


@endsection

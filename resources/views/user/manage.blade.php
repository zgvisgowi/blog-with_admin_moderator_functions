@extends('layouts.layout')
@section('title','')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>image</th>
                <th>description</th>
                <th>content</th>
                <th>delete/edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>
                        @php
                        echo ++$i;
                        @endphp
                    </td>

                    <td>

                    </td>

                    <td>

                    </td>

                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

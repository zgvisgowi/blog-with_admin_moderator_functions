@extends('admin.layout.layout')
@section('content')
    <div class="row  text-center g-4">
        @include('admin.cards.moderators_Card')
        @include('admin.cards.Post_cards')
        @include('admin.cards.users_card')
    </div>
@endsection

@extends('layouts.layout')

@section('title', 'Messagerie')



@section('content')
    <div class="container container-messenger">
        @include('messenger.users', ['users' => $users])
    </div>

@endsection
@extends('layouts.layout')

@section('title', 'Messagerie')



@section('content')
    <div class="container container-messenger">
        <div class="row">
            @include('messenger.users', ['users' => $users])
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ $user->pseudo }}</div>
                    <div class="card-body"></div>
                </div>

            </div>
        </div>
    </div>

@endsection
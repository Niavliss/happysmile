@extends('layouts.admin')

@section('title', 'Administrator')

@section('content')
    <div class="row" style="border-radius: 3px; background-color: white; margin: auto; width: 95%; height: 100%; text-align: center;">
    <ul class="list-unstyled">
        @foreach($users as $user)
            <li>{{ $user->pseudo }}</li>
        @endforeach
    </ul>
    </div>
@endsection
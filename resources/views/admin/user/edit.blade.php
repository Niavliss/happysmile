@extends('layouts.admin')

@section('title', 'Administrator Edit User')

@section('content')

    <div class="container">
        <div class="row">
            <form method="POST" action="{{ route( 'admin.user.edit',['user'=>$user->id]) }}" >
                @csrf
                @method('PUT')
                <label for="pseudo">pseudo</label>
                <input id="pseudo" type="text" name="pseudo" value="{{$user->pseudo}}" >
                <label for="email">email</label>
                <input id="email" type="email" name="email" value="{{$user->email}}" >
                <label for="birth">Date de naissance</label>
                <input id="birth" type="date" name="birth" value="{{$user->birth}}" >

                <button type="submit" class="btn btn-warning ">Modifier !</button>

            </form>
        </div>
    </div>

@endsection

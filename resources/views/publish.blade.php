@extends('layouts.layout')

@section('title', 'Publier')

@section('content')
    <div id="cont_fiche_profil"></div>
    <div id="menu_profil">
        <img class="img-fluid" src="{{URL::asset('img/user_logo.png')}}">
        <h2>{{ $user->name }}</h2>

    </div>
    <div class="container" id="publish_body_profil">
        <div class="row">
            <div class="col-12 status">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Publier une blague :</h5>
                        <input name="title"><br>
                        <textarea name="content"></textarea>

                        <ul><a href="/profil"><button class="btn btn-warning btn-sm">Retour</button></a>
                            <button type="submit" class="btn btn-warning btn-sm">Publier</button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

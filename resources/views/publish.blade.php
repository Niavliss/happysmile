@extends('layouts.layout')

@section('title', 'Publish')

@section('content')
    <div id="cont_fiche_profil"></div>
    <div id="menu_profil">
        <img class="img-fluid" src="{{URL::asset('img/user_logo.png')}}">
        <h2>Pseudo</h2>

    </div>
    <div class="container" id="publish_body_profil">
        <div class="row">
            <div class="col-12 status">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Publier une blague :</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

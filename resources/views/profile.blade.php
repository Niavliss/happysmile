@extends('layouts.layout')

@section('title', 'Profil')

@section('content')
    <div id="cont_fiche_profil"></div>
    <div id="menu_profil">
        <img class="img-fluid" src="{{URL::asset('img/user_logo.png')}}">
        <h2>{{Auth::user()->name}}</h2>
        <ul>
            <li><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_publier">Publier</button>
                <div class="modal fade" id="modal_publier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Publication</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <textarea name="textarea" rows="5" cols="48"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer</button>
                                <button type="button" class="btn btn-warning">Publier</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li><button class="btn btn-warning btn-sm">Amis</button></li>
            <li><button class="btn btn-warning btn-sm">Messages</button></li>
            <li><button class="btn btn-warning btn-sm">Demander en amis</button></li>
        </ul>
    </div>
    <div class="container" id="cont_body_profil">
        <div class="row">
            <div class="col-12 status">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenue !</h5>
                        <p class="card-text">Vous pourrez prochainement publier des articles dans cette section une fois votre compte créé et connecté.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <img class="card-img-bottom" src="{{URL::asset('img/banner_hs.png')}}" alt="banner_image">
                </div>
            </div>
            <div class="col-12 status">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ajouter vos amis !</h5>
                        <p class="card-text">Une fonction invitation sera prochainement intégrée pour inviter les autres utilisateurs du site à rejoindre votre liste d\'amis et vous permettre ainsi de partager du contenu avec eux !</p>
                        <p class="card-text"><small class="text-muted">Last updated 1 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
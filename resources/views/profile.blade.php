@extends('layouts.layout')

@section('title', 'Profil')

@section('content')
    <div id="cont_fiche_profil"></div>
    <div id="menu_profil">
        <img class="img-fluid" src="{{URL::asset('img/user_logo.png')}}">
        <h2>{{$user->name}}</h2>
        <ul><a href="{{ route('front_categories_publish') }}">
                <button class="btn btn-warning btn-sm">Publier</button>
            </a>
            <li>
                <button class="btn btn-warning btn-sm">Amis</button>
            </li>
            <li>
                <button class="btn btn-warning btn-sm">Messages</button>
            </li>
            <li>
                <button class="btn btn-warning btn-sm">Demander en amis</button>
            </li>
        </ul>
    </div>
    <div class="container" id="cont_body_profil">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-3">
                    <div class="card txt">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->content}} </p>
                        </div>
                    </div>
                </div>
            {{--@else--}}
                    <div class="col-12 status">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Bienvenue !</h5>
                                <p class="card-text">Vous pourrez prochainement publier des articles dans cette section
                                    une fois votre compte créé et connecté.</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                            <img class="card-img-bottom" src="{{URL::asset('img/banner_hs.png')}}" alt="banner_image">
                        </div>
                    </div>
                    <div class="col-12 status">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Ajouter vos amis !</h5>
                                <p class="card-text">Une fonction invitation sera prochainement intégrée pour inviter
                                    les autres utilisateurs du site à rejoindre votre liste d\'amis et vous permettre
                                    ainsi de partager du contenu avec eux !</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 1 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
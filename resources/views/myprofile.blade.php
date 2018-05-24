@extends('layouts.layout')

@section('title', 'Mon Profil')

@section('content')
    <div id="cont_fiche_profil"></div>
    <div id="menu_profil">
        <img class="img-fluid" src="{{ asset('storage/' . $user->pic_path) }}">
        <h2>{{$user->pseudo}}</h2>
        <ul><a href="/publier">
                <button class="btn btn-warning btn-sm">Publier</button>
            </a>
            <li>
                <button class="btn btn-warning btn-sm">Amis</button>
            </li>
            <li>
                <button class="btn btn-warning btn-sm">Messages</button>
            </li>
            <li><a href="/parametres">
                    <button class="btn btn-warning btn-sm">Paramètres</button>
                </a></li>
        </ul>
    </div>
    <div class="container" id="cont_body_profil">
        <div class="row">
            <div>
                <h2> Mes amis </h2>

                @if($demands->count() >0)
                    <ul>
                        @foreach($demands as $demand)

                            <li>{{$demand->user_id}}</li>

                        @endforeach
                    </ul>
                    @else
                    coucou bordel de merde !
                @endif

            </div>
            @foreach ($posts as $post)
                <div class="col-12">
                    <div class="card txt">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <span class="card-subtitle hour text-muted mb-2"></span> {{$post->created_at->format('d-m-Y H:i:s')}}
                            <p class="card-text content">{{ $post->content }} </p>
                        </div>
                    </div>
                    <div class="bottompost">
                        <img class="icon-like" src="{{URL::asset('img/lemonlike.png')}}" alt="lemonlike">
                        <span class="numbers"> </span>
                        <img class="icon-com" src="{{URL::asset('img/comment.png')}}" alt="commentaire">
                        <span class="numbers"> </span>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
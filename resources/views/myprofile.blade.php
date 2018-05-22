@extends('layouts.layout')

@section('title', 'Profil')

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

                <ul class="list-unstyled">
                    @dd($user->friendsOn())
                        @foreach ($user->friends as $friend)

                            <li>{{$friend->pseudo}} status : {{$friend->pivot->status}}
                                <form method="POST" action="">
                                    @csrf
                                    <input type="hidden" name="target_user_id" value="{{$friend->id}}">
                                    <button type="submit" class="btn btn-warning" name="answer" value="yes">oui
                                    </button>
                                    <button type="submit" class="btn btn-warning" name="answer" value="no">non
                                    </button>
                                </form>
                            </li>
                        @endforeach

                </ul>
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
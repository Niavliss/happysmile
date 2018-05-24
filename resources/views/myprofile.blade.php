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
<<<<<<< HEAD
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

=======
            <div class="col-4">
                <h2> Mes Amis </h2>
                <h5> Demandes :</h5>
                <ul class="list-unstyled ml-4">
                    @foreach ($user->friendsOn as $friend)
                        @if($friend->pivot->status =='0')
                            <li> Voulez-vous être l'ami de {{$friend->pseudo}} ?
                                <form method="POST" action="">
                                    @csrf
                                    <input type="hidden" name="target_user_id" value="{{$friend->id}}">
                                    <button type="submit" class="btn btn-warning" name="answer" value="yes">oui
                                    </button>
                                    <button type="submit" class="btn btn-warning" name="answer" value="no">non
                                    </button>
                                </form>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <h5>Liste de mes amis</h5>
                <ul class="ml-4">
                    @foreach ($user->allFriendsValid() as $friend)
                        <li> Vous êtes l'ami de {{$friend->pseudo}} depuis
                            le {{$friend->pivot->updated_at->format('d-m-Y')}} </li>
                    @endforeach
                </ul>
>>>>>>> a5d22adc06ea828d8cbf51bb454f42a5216d28c9
            </div>
            <div class="col-8">
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
    </div>
@endsection
@extends('layouts.layout')

@section('title', 'Profil')

@section('content')
    <div id="cont_fiche_profil"></div>
    <div id="menu_profil">
        <img src="{{ asset('storage/' . $user->pic_path) }}">
        <h2>{{$user->pseudo}}</h2>
            <li><button class="btn btn-warning btn-sm">Amis</button></li>
            @if($friendexist!==1)
            <li>
                <form method="POST" action="">
                    @csrf
                    <button type="submit" class="btn btn-warning btn-sm" name="friendrequest">Demander en ami</button>
                </form>
            </li>
            @endif
    </div>
    <div class="container" id="cont_body_profil">
        <div class="row">
            <div class="col-8">
            @foreach ($posts as $post)
                <div class="col-12 mb-2">
                    <div class="card txt">
                        <div class="card-body">
                            <a href="{{ route('front_post', ['id'=>$post->id]) }}"><h4 class="card-title">{{$post->title}}</h4></a>
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
@extends('layouts.layout')

@section('title', 'Profil')

@section('content')
    <div id="cont_fiche_profil"></div>
    <div id="menu_profil">
        <img src="{{ asset('storage/' . $user->pic_path) }}">
        <h2>{{$user->name}}</h2>
            <li><button class="btn btn-warning btn-sm">Amis</button></li>
            <li><button class="btn btn-warning btn-sm">Demander en amis</button></li>
        </ul>
    </div>
    <div class="container" id="cont_body_profil">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-12">
                    <div class="card txt">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->content}} </p>
                        </div>
                    </div>
                </div>
            {{--@else--}}
            @endforeach
        </div>
    </div>
@endsection
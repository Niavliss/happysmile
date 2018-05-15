@extends('layouts.layout')

@section('title', 'post')



@section('content')
    <div class="container" id="post">
        <div class="row">
            <div class="col-12">
                <div class="card txt post">
                    <div class="card-body">
                        <img class="imgprofil" src="{{ asset('storage/' . $post->user->pic_path) }}">
                        <a href="{{ url('profil/'.$post->user->id) }}">{{$post->user->name}}</a>
                        <h2 class="card-title titlepost mr-2 ">{{ $post->title }}</h2>
                        <span class="card-subtitle hour text-muted mb-2"></span> {{$post->created_at->format('d-m-Y H:i:s')}}
                        <p class="card-text content">{{ $post->content }} </p>
                    </div>
                </div>
                <div class="bottompost container">
                    <div class="row justify-content-between">
                        <div class="col">
                            <img class="icon-like" src="{{asset('img/lemonlike.png')}}" alt="lemonlike">
                            <span class="numbers"> {{$post->lemonlike}} </span>
                        </div>
                        <div class="col-2">
                            <img class="icon-com" src="{{asset('img/comment.png')}}" alt="commentaire">
                            <span class="numbers"> </span>
                        </div>
                        <div class="col-2">
                            <a href="{{url('post/'.$post->id .'/editer')}}">
                                <button class="btn-sm btn-warning">Editer</button>
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="{{Route('front_post_delete', ['id' => $post->id])}}">
                                <button class="btn-sm btn-warning">Supprimer</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
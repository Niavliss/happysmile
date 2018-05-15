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
                <div class="bottompost">
                    <img class="icon-like" src="{{URL::asset('img/lemonlike.png')}}" alt="lemonlike">
                    <span class="numbers"> {{$post->lemonlike}} </span>
                    <img class="icon-com" src="{{URL::asset('img/comment.png')}}" alt="lemonlike">
                    <span class="numbers"> </span>
                </div>
            </div>
        </div>
    </div>
@endsection
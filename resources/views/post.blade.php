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
                        <h5 class="card-title titlepost badge badge-warning mr-2 ">{{ $post->title }}</h5>
                        <p class="card-text content">{{ $post->content }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
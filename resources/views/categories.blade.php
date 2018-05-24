@extends('layouts.layout')

@section('title', 'Catégories')



@section('content')
    <div id="cont_fiche_categories"></div>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <div id="entetecategories">
        @guest
            <a href="{{ route('front_categories') }}">
                <button class="btn btn-warning tout">Tout</button>
            </a>
            <a href="{{ route('front_typemedia', ['typemedia' => 'blague']) }}">
                <button class="btn btn-warning ">Blagues</button>
            </a>
            <a href="{{ route('front_typemedia', ['typemedia' => 'image']) }}">
                <button class="btn btn-warning ">Images</button>
            </a>
            <a href="{{ route('front_typemedia', ['typemedia' => 'video']) }}">
                <button class="btn btn-warning ">Videos</button>
            </a>
        @else
            <a href="{{ route('front_categories') }}">
                <button class="btn btn-warning tout">Tout</button>
            </a>
            <a href="{{ route('front_typemedia', ['typemedia' => 'blague']) }}">
                <button class="btn btn-warning ">Blagues</button>
            </a>
            <a href="{{ route('front_typemedia', ['typemedia' => 'image']) }}">
                <button class="btn btn-warning ">Images</button>
            </a>
            <a href="{{ route('front_typemedia', ['typemedia' => 'video']) }}">
                <button class="btn btn-warning ">Videos</button>
            </a>
            <a href="{{ route('front_categories_publish') }}">
                <button class="btn btn-warning ">Publier</button>
            </a>
        @endguest
    </div>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <div class="container" id="cont_body_categories">
        <div class="row">
            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
            @foreach($posts as $post)
                <div class="col-xl-3 col-sm-6 p-2">
                    <div class="card post">
                        <div class="card-body p-2">
                            <a href="{{ url('post/'.$post->id) }}"><h4 class="card-title">{{$post->title}}</h4></a>
                            <ul class="list-post">
                                <li><span class="card-subtitle text-muted"> Type :</span> <a
                                            href="{{ url('categories/'.$post->type_media) }}"
                                            class="card-link">{{$post->type_media}}</a></li>
                                <li><span class="card-subtitle text-muted mb-2">Auteur :</span> <a
                                            href="
                                             @if((isset($user)) && $user->id!=$post->user->id)
                                            {{ url('/profil/'.$post->user->id) }}
                                            @else
                                            {{ url('/mon-profil/') }}
                                            @endif
                                                    ">{{$post->user->pseudo}}</a></li>
                                <li>
                                    <span class="card-subtitle text-muted mb-2">Date de création :</span> {{$post->created_at->format('d-m-Y')}}
                                </li>
                            </ul>
                            <div class="card-text mt-3">{{substr($post->content,0,60)}} </div>
                        </div>
                        <div class="bottompost">
                            <img class="icon-like" src="{{URL::asset('img/lemonlike.png')}}" alt="lemonlike">
                            <span class="numbers"> </span>
                            <img class="icon-com" src="{{URL::asset('img/comment.png')}}" alt="commentaire">
                            <span class="numbers"> </span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    </div>
@endsection
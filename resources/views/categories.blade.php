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
            <a href="{{ route('front_jokes') }}">
                <button class="btn btn-warning ">Blagues</button>
            </a>
            <a href="{{ route('front_images') }}">
                <button class="btn btn-warning ">Images</button>
            </a>
            <a href="{{ route('front_videos') }}">
                <button class="btn btn-warning ">Videos</button>
            </a>
        @else
            <a href="{{ route('front_categories') }}">
                <button class="btn btn-warning tout">Tout</button>
            </a>
            <a href="{{ route('front_jokes') }}">
                <button class="btn btn-warning ">Blagues</button>
            </a>
            <a href="{{ route('front_images') }}">
                <button class="btn btn-warning ">Images</button>
            </a>
            <a href="{{ route('front_videos') }}">
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
                <div class="col-3">
                    <div class="card txt post">
                        <div class="card-body">
                            <a href="{{ url('post/'.$post->id) }}" class="badge badge-warning mr-2" role="button">{{$post->title}}</a>
                            <a href="{{ url('profil/'.$post->user->id) }}">{{$post->user->name}}</a>
                            <div class="card-text mt-2">{{$post->content}} </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    </div>
@endsection
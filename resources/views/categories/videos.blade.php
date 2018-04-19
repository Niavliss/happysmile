@extends('layouts.layout')

@section('title', 'Videos')



@section('content')
    <div id="cont_fiche_categories"></div>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <div id="entetecategories">
        <a href="{{ route('front_categories') }}"><button class="btn btn-warning tout">Tout</button></a>
        <a href="{{ route('front_jokes') }}"><button class="btn btn-warning ">Blagues</button></a>
        <a href="{{ route('front_images') }}"><button class="btn btn-warning ">Images</button></a>
        <a href="{{ route('front_videos') }}"><button class="btn btn-warning ">Videos</button></a>
    </div>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <div class="container" id="cont_body_categories">
        <div class="row">
            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
            @foreach($videos as $video)
                <div class="col-3">
                    <div class="card txt">
                        <div class="card-body">
                            <h5 class="card-title">{{$video->title}}</h5>
                            <p class="card-text">{{$video->content}} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
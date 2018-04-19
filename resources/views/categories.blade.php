@extends('layouts.layout')

@section('title', 'Catégories')



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
            @foreach($posts as $post)
            <div class="col-3">
                <div class="card txt">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->content}} </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Précédent</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Suivant</a>
                </li>
            </ul>
        </nav>
        <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    </div>
@endsection
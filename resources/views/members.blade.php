@extends('layouts.layout')

@section('title', 'Membres')


@section('content')

    <body>
    <!-- ======================================================================= -->
    <div id="cont_fiche_membres"><h2>Membres du site</h2></div>
    <div class="container">
        <div id="cont_body_membres">
            <div class="row">

                @foreach($profils as $profil)
                    <div class="col-3">
                        <div class="card-body">
                            <a href="{{ url('/profil/'.$profil->id) }}" class="badge badge-info">{{$profil->name}}</a>
                            <p class="card-text">{{$profil->created_at}} </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


@endsection
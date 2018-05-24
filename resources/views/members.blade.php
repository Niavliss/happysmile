@extends('layouts.layout')

@section('title', 'Membres')


@section('content')

    <body>
    <!-- ======================================================================= -->
    <div id="cont_fiche_members"><h2>Membres du site</h2></div>
    <div class="container">
        <div id="cont_body_members">
            <div class="row">

                @foreach($profils as $profil)
                    <div class="col-3">
                        <div class="card-body">
                            <a href="
                                @if($user->id!=$profil->id)
                            {{ url('/profil/'.$profil->id) }}
                            @else
                                {{ url('/mon-profil/') }}
                            @endif
                            " class="badge badge-info">{{$profil->pseudo}}</a>
                            <p class="card-text">{{$profil->created_at}} </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


@endsection
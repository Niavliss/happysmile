@extends('layouts.layout')

@section('title', 'Paramètres')

@section('content')

    <div class="container container-support">
        <h1 class="title-support">Signaler un problème</h1>
        <h3>Signalement</h3>
        <p class="p-1">Si vous constatez un problème de fonctionnement du site, merci de le signaler ci-dessous. Nous répondrons dans les plus brefs délais.</p>

        {{--Add form to report an issue here--}}

        <a href="/">
            <button class="btn btn-warning btn-sm" id="retour-accueil">Retour à l'accueil</button>
        </a>
    </div>



    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
@endsection
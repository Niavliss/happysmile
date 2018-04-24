@extends('layouts.layout')

@section('title', 'Publier un post')



@section('content')
       <div class="container" id="cont_body_categories">
        <div class="row">
            <form action="{{ url('categories/publier') }}" method="POST">
                {{ csrf_field() }}
                <label for="type_media">Type :</label>
                <input type="text" name="type_media" id="type_media">
                <label for="title">Titre: </label>
                <input type="text" name="title" id="title">
                <label for="content">Ecrivez votre blague: </label>
                <input type="text" name="content" id="content">
                <input type="submit" value="Envoyer !">
            </form>
        </div>
    </div>
@endsection
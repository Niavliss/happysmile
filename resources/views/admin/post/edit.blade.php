@extends('layouts.admin')

@section('title', 'Administrator Edit Post')

@section('content')
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ route( 'admin.post.update',['post'=>$post->id]) }}">
                @csrf
                @method('PUT')
                <label for="type_media">Type :</label>
                <select name="type_media" id="type_media" class="custom-select mr-sm-2">
                    <option value="blague" selected>Blague</option>
                    <option value="image">Image</option>
                    <option value="video">Video</option>
                </select>
                <label for="title">Titre</label>
                <input id="title" type="text" name="title" value="{{$post->title}}">
                <label for="content">Contenu</label>
                <textarea id="content" type="textarea" name="content">{{$post->content}}</textarea>

                <button type="submit" class="btn btn-warning ">Modifier !</button>

            </form>
        </div>
    </div>

@endsection
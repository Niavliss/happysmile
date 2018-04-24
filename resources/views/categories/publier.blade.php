@extends('layouts.layout')

@section('title', 'Publier un post')



@section('content')
    <div class="container" id="cont_body_categories">
        <div class="row">
            <div class="col-12">
                <div class="card p-2">
                    <form action="{{ url('categories/publier') }}" method="POST">
                        {{ csrf_field() }}
                        <h4 class="card-title">Faîtes-nous rire :</h4>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="type_media">Type :</label>
                                <select name="type_media" id="type_media" class="custom-select mr-sm-2">
                                    <option selected>Choisir</option>
                                    <option value="blague">Blague</option>
                                    <option value="image">Image</option>
                                    <option value="video">Video</option>
                                </select>
                            </div>
                            <div class="form-group col-md">
                                <label for="title">Titre :</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content">Ecrire ici :</label>
                            <textarea type="text" class="form-control" id="content" name="content" rows="9"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning ">Envoyer !</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
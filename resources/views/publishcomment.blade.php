@extends('layouts.layout')

@section('title', 'Commenter un post')



@section('content')
    <div class="container" id="cont_body_categories">
        <div class="row">
            <div class="col-12">
                <div class="card p-2">
                    <form action="{{ url('/categories/commenter') }}" method="POST">
                        {{ csrf_field() }}
                        <h4 class="card-title">Commentez !!</h4>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="type_media">Type :</label>
                                <select name="type_media" id="type_media" class="custom-select mr-sm-2">
                                    <option value="blague" selected>Blague</option>
                                    <option value="image">Image</option>
                                    <option value="video">Video</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="privacy">Statut :</label>
                                <select name="privacy" id="privacy" class="custom-select mr-sm-2">
                                    <option selected>Choisir</option>
                                    <option value="0">Public</option>
                                    <option value="1">Privé</option>
                                </select>
                            </div>
                            <div class="form-group col-md">
                                <label for="title">Titre :</label>
                                <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="title" value="{{ old('title')}}">
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content">Ecrire ici :</label>
                            <textarea type="text" class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}" id="content" name="content" rows="9"  value="{{ old('content')}}"></textarea>
                            @if ($errors->has('content'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-warning ">Envoyer !</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
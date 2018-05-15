@extends('layouts.layout')

@section('title', 'Paramètres')

@section('content')
    <div class="container container-settings">
        <h1 class="big-title-settings">Paramètres de compte</h1>
        <div class="container border-bottom border-warning rounded">
            <h3 class="title-settings">Photo de profil</h3>
            <form enctype="multipart/form-data" action="{{ route('upload_image') }}" method="POST">
                @csrf
                <input type="file" name="file" class="form-control-file" id="photo">
                <button type="submit" class="btn btn-sm btn-warning btn-settings">Enregistrer</button>
            </form>
        </div>
        <div class="container border-bottom border-warning rounded">
            <h3 class="title-settings">Mot de passe</h3>
            <form enctype="multipart/form-data" action="{{ route('upload_password') }}" method="POST">
                @csrf

                @if ($errors->has('password'))
                    <div class="alert alert-warning">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                @endif
                <label for="password">Mot de passe actuel</label>
                <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" required>
                <div class="invalid-feedback">
                    Champ obligatoire.
                </div>

                @if ($errors->has('new_password'))
                    <div class="alert alert-warning">
                        <strong>{{ $errors->first('new_password') }}</strong>
                    </div>
                @endif
                <label for="new_password">Nouveau mot de passe</label>
                <input type="password" name="new_password" class="form-control{{ $errors->has('new_password') ? ' is-invalid' : '' }}" id="new_password" required>
                <div class="invalid-feedback">
                    Champ obligatoire.
                </div>


                <label for="new_password_confirmation">Confirmation du nouveau mot de passe</label>
                <input type="password" name="new_password_confirmation" class="form-control{{ $errors->has('new_password') ? ' is-invalid' : '' }}"
                       id="new_password_confirmation" required>
                <div class="invalid-feedback">
                    Champ obligatoire.
                </div>

                <button type="submit" class="btn btn-sm btn-warning btn-settings">Enregistrer</button>
            </form>
    </div>

            {{--<h3>Adresse email</h3>--}}
            {{--<p>Ancienne adresse email</p>--}}
            {{--<input type="email" name="oldEmail" class="form-control-file" id="oldEmail">--}}
            {{--<p>Nouvelle adresse email</p>--}}
            {{--<input type="email" name="newEmail" class="form-control-file" id="newEmail">--}}

            {{--<input type="submit" class="btn btn-sm btn-warning">--}}

        </div>


    </div>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
@endsection


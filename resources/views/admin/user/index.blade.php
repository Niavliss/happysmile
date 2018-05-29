@extends('layouts.admin')

@section('title', 'Administrator - Users List')

@section('content')
    <div class="row  btn-admin-create">
        <a href="{{ route('admin.user.create')}}"><button class="btn btn btn-warning">Créer un utilisateur</button></a>
    </div>
    <div class="container-fluid">
    <div class="row"
         style="border-radius: 3px; background-color: white; margin: auto; width: 95%; height: 100%; text-align: center;">

        <div class="col-xl-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Naissance</th>
                    <th>Photo de profil</th>
                    <th> Editer</th>
                    <th> Supprimer</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a href="{{route('admin.user.show',['user'=>$user->id])}}">{{ $user->pseudo }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->birth }}</td>
                        <td><img src="{{ asset('storage/' . $user->pic_path) }}" style="width: 15%"></td>
                        <td><a href="{{ route('admin.user.edit', ['user'=>$user->id]) }}">
                                <button class="btn btn-warning">Editer</button>
                            </a></td>
                        <td><a href="{{ route('admin.user.destroy', ['user'=>$user]) }}">
                                <button class="btn btn-warning">Supprimer</button>
                            </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
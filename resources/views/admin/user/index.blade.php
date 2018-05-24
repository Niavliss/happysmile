@extends('layouts.admin')

@section('title', 'Administrator')

@section('content')
    <div class="row"
         style="border-radius: 3px; background-color: white; margin: auto; width: 95%; height: 100%; text-align: center;">
        <div class="col-xl-12">
            <table>
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Naissance</th>
                    <th>Photo de profil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="{{url('/admin/user/' .$user->id)}}">{{ $user->pseudo }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->birth }}</td>
                    <td><img src="{{ asset('storage/' . $user->pic_path) }}" style="width: 15%"></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
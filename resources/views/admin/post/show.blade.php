@extends('layouts.admin')

@section('title', 'Administrator - Post')

@section('content')
    <div class="row"
         style="border-radius: 3px; background-color: white; margin: auto; width: 95%; height: 100%; text-align: center;">
        <div class="col-xl-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th> Id</th>
                    <th> Title</th>
                    <th> Utilisateur</th>
                    <th> Contenu</th>
                    <th> privacy</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->user->pseudo}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->privacy}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
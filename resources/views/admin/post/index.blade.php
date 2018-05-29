@extends('layouts.admin')

@section('title', 'Administrator - Posts List')

@section('content')
    <div class="row  btn-admin-create">
        <a href="{{ route('admin.post.create')}}"><button class="btn btn btn-warning">Créer un post</button></a>
    </div>
    <div class="row"
         style="border-radius: 3px; background-color: white; margin: auto; width: 95%; height: 100%; text-align: center;">
        <div class="col-xl-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>Auteur</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Date de création</th>
                    <th> Editer</th>
                    <th> Supprimer</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{$post->user->pseudo}}</td>
                        <td><a href="{{route('admin.post.show',['post'=>$post->id])}}">{{ $post->title }}</a></td>
                        <td>{{ $post->content }}</td>
                        <td>{{$post->created_at}}</td>
                        <td><a href="{{ route('admin.post.edit', ['post'=>$post->id]) }}">
                                <button class="btn btn-warning">Editer</button>
                            </a></td>
                        <td><a href="{{ route('admin.post.destroy', ['post'=>$post]) }}">
                                <button class="btn btn-warning">Supprimer</button>
                            </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
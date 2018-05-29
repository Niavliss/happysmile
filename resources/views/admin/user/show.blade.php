@extends('layouts.admin')

@section('title', 'Administrator - User')

@section('content')
    <div class="row"
         style="border-radius: 3px; background-color: white; margin: auto; width: 95%; height: 100%; text-align: center;">
        <div class="col-xl-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th> Id</th>
                    <th> Pseudo</th>
                    <th> Image</th>
                    <th> Nombre de posts</th>
                    <th> Liste des posts</th>
                    <th> Groupe Type</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->pseudo}}</td>
                    <td><img src="{{ asset('storage/' . $user->pic_path) }}" style="width: 15%"></td>
                    <td>{{$user->posts_count}}</td>
                    <td>
                        <ul class="list-unstyled">
                        @foreach ($user->posts as $post)
                            <li> <a href="{{ route('admin.post.show',['id'=> $post->id]) }}">{{$post->title}}</a></li>
                        @endforeach
                        </ul>
                    </td>
                    <td>{{$user->grouptype}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
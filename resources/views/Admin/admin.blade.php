@extends('layouts.admin')

@section('title', 'Administrator')

@section('content')
        <div class="row" style="border-radius: 3px; background-color: white; margin: auto; width: 95%; height: 100%; text-align: center;">
            <div class="col-4">
                <h2>Users</h2>
                <ul class="list-unstyled">
                    @foreach($users as $user)
                        <li>{{ $user->pseudo }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-4">
                <h2>Posts</h2>
                <ul>
                    @foreach($posts as $post)
                        <li>
                            <p>{{ $post->title }}</p>
                            <p>{{ $post->content }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-4">
                <h2>Reports</h2>
                <ul>

                </ul>
            </div>
        </div>
@endsection

@extends('layouts.admin')

@section('title', 'Administrator')

@section('content')
    <div class="row" style="border-radius: 3px; background-color: white; margin: auto; width: 95%; height: 100%; text-align: center;">
    <ul class="list-unstyled">
        @foreach($posts as $post)
            <li>
                <p>{{ $post->title }}</p>
                <p>{{ $post->content }}</p>
            </li>
        @endforeach
    </ul>
    </div>
@endsection
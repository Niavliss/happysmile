@extends('layouts.layout')

@section('title', 'post')



@section('content')
    <div class="container" id="cont_body_categories">
        <div class="row">
            <div class="col-12">
                <div class="card txt">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
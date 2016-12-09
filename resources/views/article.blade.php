@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row marketing">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                @foreach($catalog as $post)
                <h4>{{ $post->title }}</h4>
                <b>{!! $post->description !!}</b>
                <p>{!! $post->content !!}</p>
                @endforeach
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
@stop
@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row marketing">
            <div class="col-lg-6">
                @foreach($catalog as $post)
                    @if ($loop->index == 3)
            </div>
            <div class="col-lg-6">
                @endif
                <h4>{{ $post->title }}</h4>
                <p>{!! $post->description !!}</p>
                <a href="/article/{{ $post->url }}">читать...</a>
                @endforeach
            </div>
        </div>
    </div>
@stop

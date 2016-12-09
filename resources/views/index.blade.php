@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Lorem ipsum dolor</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam aspernatur aut, cum
                dolores ea eligendi enim excepturi expedita illum ipsa libero magnam quo rem repellat soluta sunt
                voluptatibus. Accusamus!</p>
        </div>
        <div class="row marketing">
            <div class="col-lg-6">
                @foreach($posts as $post)
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

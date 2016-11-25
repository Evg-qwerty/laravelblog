@extends('main')
@section('content')
    <div class="container">
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation" class="active"><a href="#">Menu Active</a></li>
                    <li role="presentation"><a href="#">Menu 1</a></li>
                    <li role="presentation"><a href="#">Menu 2</a></li>
                    <li role="presentation"><a href="#">Menu 3</a></li>
                    <li role="presentation"><a href="#">Menu 4</a></li>
                    <li role="presentation"><a href="#">Menu 5</a></li>
                </ul>
            </nav>
            <h3 class="text-muted"><a href="/">Logo</a></h3>
        </div>
        <div class="jumbotron">
            <h1>Lorem ipsum dolor</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam aspernatur aut, cum dolores ea eligendi enim excepturi expedita illum ipsa libero magnam quo rem repellat soluta sunt voluptatibus. Accusamus!</p>
        </div>
        <div class="row marketing">
            <div class="col-lg-6">
                @foreach($posts as $post)
                    @if ($loop->index == 3)
            </div>
            <div class="col-lg-6">
                @endif
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->description }}</p>
                <a href="{{ $post->url }}">читать...</a>
                @endforeach
            </div>
        </div>
        <footer class="footer">
            <p>&copy; 2016</p>
        </footer>
    </div>
@stop

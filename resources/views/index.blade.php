@extends('main')
@section('content')
    <div class="container">
        <div class="header clearfix">
            {{----}}
            <nav class="navbar navbar-default navbar-static" id="navbar-example">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">Logo</a>
                    </div>
                    <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
{{dd($menu)}}
                                @foreach($menu as $menuFor)

                                @if($menuFor->level == 0)
                                    <li><a href="#">{{$menuFor->title}}</a></li>
                                @endif

                                @if($menuFor->level == 1)
                                    <li><a href="#">{{$menuFor->title}}</a></li>
                                    <ul class="dropdown-menu" aria-labelledby="drop1"></ul>

                                @endif


                                @endforeach


{{--1--}}
                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Гланая</a>
                            </li>
{{--1--}}
                                    {{--3--}}
                                    <li><a href="#">Action</a></li>
                                    {{--2--}}
                                    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" id="drop1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PHP<span class="caret"></span></a>
                                    <ul class="dropdown-menu" aria-labelledby="drop1">
                                    {{--2--}}
                                    {{--3--}}
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#" class="dropdown-toggle" id="drop2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">JS<span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="drop2">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{----}}
            {{--
            <nav class="navbar navbar-default navbar-static" id="navbar-example">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">Logo</a>
                    </div>
                    <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Главная</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" id="drop1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PHP<span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="drop1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" id="drop2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">JS<span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="drop2">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            --}}

{{--            <nav>
                <a href="/" class="active">Гланая</a>
                <section id="1">
                    <a href="#" >PHP</a>
                    <nav id="1">
                        <a href="#">Статьи (PHP)</a>
                        <a href="#">Код (PHP)</a>
                    </nav>
                </section>
                <section id="2">
                    <a href="#" >JS</a>
                    <nav id="2">
                        <a href="#">Статьи (JS)</a>
                        <a href="#">Код (JS)</a>
                    </nav>
                </section>
                <a href="#">О сайте</a>
            </nav>--}}

{{--            <nav>
                <ul class="nav nav-pills pull-right">
                    @foreach($menu as $menu)
                    <li role="presentation" {{ $menu->url == $url ? 'class=active' : null  }}>
                        <a href="{{
                            $menu->parent_id.'/'.$menu->url
                        }}">{{ $menu->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>--}}
            {{--<h3 class="text-muted"><a href="/">Logo</a></h3>--}}
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

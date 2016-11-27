<div class="header clearfix">
    <nav class="navbar navbar-default navbar-fixed-top" id="navbar-example">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="collapsed navbar-toggle" type="button" data-toggle="collapse"
                        data-target=".bs-example-js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Logo</a>
            </div>
            <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                <ul class="nav navbar-nav navbar-right"><?php $id=1 ?>@foreach($menu as $menuFor){!! $menuFor->level == 2 && $menuFor->order == 0 ? '<ul class="dropdown-menu" aria-labelledby="drop{{$id-1}}">' : null!!}<li{{$menuFor->level == 1 && $menuFor->no_child == 0 ? ' class=dropdown' : null}}><a href="{{$menuFor->level != 1 && $menuFor->no_child == 0 ? '/par/' : null}}{{ $menuFor->url }}" {!! $menuFor->level == 1 && $menuFor->no_child == 0 ? "class='dropdown-toggle' id='drop$id' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'" : null!!}>{{$menuFor->title }}{!! $menuFor->level == 1 && $menuFor->no_child == 0 ? "<span class='caret'></span>":null!!}</a>{!! $menuFor->last == 1 ? '</ul>' : null!!}<?php if($menuFor->level == 1) {$id=$id+1;}?>@endforeach</ul>
            </div>
        </div>
    </nav>
</div>

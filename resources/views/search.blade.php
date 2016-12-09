@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row marketing">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                @foreach ($results as $item)
                    <li><a href="{{ route('post', [$item.category_slug, $item.slug]) }}">{{ $item.post_title }}</a>
                        <br>{{ $item.short_text }}</li>
                @endforeach
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
@stop
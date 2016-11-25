@extends('main')
@section('content')
    <div class="container">
       {{-- {{ $onePost->description }}--}}
        {{ dd($post -> title) }}
        {{--@foreach($onePost as $post)
        {{ $post->description }}
        @endforeach--}}
        <footer class="footer">
            <p>&copy; 2016</p>
        </footer>
    </div>
@stop

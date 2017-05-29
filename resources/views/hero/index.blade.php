@extends('layout')


@section('content')
    <div class="heroes-list">

        <!-- Three columns of text below the carousel -->
        <div class="row">

            @foreach($heroes as $hero)
                @include('hero.hero')
            @endforeach

        </div><!-- /.row -->

    </div>

@endsection
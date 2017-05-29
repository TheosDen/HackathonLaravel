@extends('layout')


@section('content')
    <div class="heroes-list">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">{{$hero->name}}</h2>
                <p class="lead">{{$hero->description}}</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="/images/{{$hero->id}}-big.png"
                     alt="Generic placeholder image">
            </div>
        </div><!-- /.row -->

    </div>

@endsection
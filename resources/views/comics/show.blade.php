@extends('layouts.app')

@section('content')
    <div class="card m-2 d-flex flex-row">
        <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="" style="width: 50%">
        <div class="mt-2 w-75 p-2">
            <h5 class="card-title"> {{ $comic['id'] }} </h5>
            <h4 class="card-title">{{ $comic['title'] }}</h4>
            <p class="card-text"> {{ $comic['drop_date'] }} </p>
            <p class="card-text"> {{ $comic['price'] }} </p>
            <p class="card-text"> {{ $comic['description'] }} </p>
            <a href="{{route("comics.edit", $comic->id)}}" class="btn btn-primary">UPDATE INFOS</a>
        </div>
    </div>
@endsection

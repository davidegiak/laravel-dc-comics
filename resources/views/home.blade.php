@extends('layouts.app')

@section('content')
    <p>This is my paragraph content.</p>
    <button class="btn btn-primary">Cliccami</button>

    <div class="container">
        @foreach ($comics as $item)
        <ul>
            <h5> {{$item['id']}} </h5>
            <li><a href="{{route("show")}}"> {{$item['title']}} </a></li>
            <li> {{$item['drop_date']}} </li>
            <li> {{$item['votes']}} </li>
        </ul>
        @endforeach
    </div>
@endsection

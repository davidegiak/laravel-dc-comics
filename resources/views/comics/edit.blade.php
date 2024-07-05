@extends('layouts.app')

@section('content')
    <form action="{{route("comics.update", $comic->id)}}" method="POST" >
        @method('PUT')
        @csrf
        <input name="title" type="text" placeholder="Titolo" value="{{$comic->title}}">
        <input name="drop_date" type="text" placeholder="Data di rilascio" value="{{$comic->drop_date}}">
        <input name="price" type="text" placeholder="prezzo$$" value="{{$comic->price}}">
        <input name="thumb" type="text" placeholder="link alla foto" value="{{$comic->thumb}}">
        <input name="description" type="text" placeholder="descrizione" value="{{$comic->description}}">
        <button type="submit" class="btn bg-primary">INVIA</button>
    </form>
@endsection

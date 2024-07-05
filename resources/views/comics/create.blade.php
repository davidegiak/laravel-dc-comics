@extends('layouts.app')

@section('content')
    <form action="{{route("comics.store")}}" method="POST" >
        @csrf
        <input name="title" type="text" placeholder="Titolo">
        <input name="drop_date" type="text" placeholder="Data di rilascio">
        <input name="price" type="text" placeholder="prezzo$$">
        <input name="thumb" type="text" placeholder="link alla foto">
        <input name="description" type="text" placeholder="descrizione">
        <button type="submit" class="btn bg-primary">INVIA</button>
    </form>
@endsection

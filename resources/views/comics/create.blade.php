@extends('layouts.app')

@section('content')
    <form action="{{route("comics.store")}}" method="POST" >
        @csrf
        <input name="title" type="text">
        <input name="drop_date" type="text">
        <input name="price" type="text">
        <input name="thumb" type="text">
        <button type="submit" class="btn bg-primary">INVIA</button>
    </form>
@endsection

@extends('layouts.app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif
<div class="container my-2">
    <h1 class="comic-neue-bold">Modifica <span class="text-danger">{{$comic->title}}</span></h1>
</div>
<div class="container d-flex align-items-center justify-content-center">
    <form class="row g-3 gap-2 align-items-center justify-content-center" action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PUT')
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-5">
            <label for="title" class="form-label">Comic title</label>
            <input id="title" class="form-control" name="title" type="text" placeholder="Titolo" value="{{$comic->title}}" oninput="disabledBtn()" >
            <div class="valid-feedback d-none" id="validTitle">
              Looks good!
            </div>
            @error('title')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-5">
            <label for="drop_date" class="form-label">Drop date</label>
            <input id="drop_date" class="form-control" name="drop_date" type="date" placeholder="Data di rilascio" value="{{$comic->drop_date}}" oninput="disabledBtn()">
            @error('drop_date')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror   
        </div>
        <div class="col-md-5">
            <label for="price" class="form-label">Comic price</label>
            <input id="price" class="form-control" name="price" type="text" placeholder="prezzo$$" value="{{str_replace('$', '', $comic->price)}}" oninput="disabledBtn()">
            @error('price')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror

        </div>
        <div class="col-md-5">
            <label for="thumb" class="form-label">Comic foto</label>
            <input id="thumb" class="form-control" name="thumb" type="text" placeholder="link alla foto" value="{{$comic->thumb}}" oninput="disabledBtn()">
            @error('thumb')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-5">
            <label for="description" class="form-label">Comic description</label>
            <input id="description" class="form-control" name="description" type="text" placeholder="descrizione" value="{{$comic->description}} oninput="disabledBtn()">
            @error('description')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="text-center">
            <button id="button" type="submit" class="btn bg-primary">INVIA</button>
        </div>
    </form>
</div>
@endsection

<style scoped>
</style>

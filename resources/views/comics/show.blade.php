@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container p-2">
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <div class="img col-12 col-md-6 col-lg-4">
                <img class="" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" style="width: 100%">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                {{-- <h5 class="text-primary"># {{ $comic['id'] }} </h5> --}}
                <h4 class="text-warning"> {{ $comic['title'] }}</h4>
                <p class=""><span class="text-warning">Data di uscita:</span> {{ $comic['drop_date'] }} </p>
                @if (Str::startsWith($comic['price'], '$'))
                    <p class="" style="font-size: 12px;">{{ $comic['price'] }}
                    </p>
                @else
                    <p class="" style="font-size: 12px;">${{ $comic['price'] }}
                    </p>
                @endif
                <p class=""><span class="text-warning">Descrizione:</span> {{ $comic['description'] }} </p>
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary mb-2">UPDATE INFOS</a>
                <a href="{{ route('comics.index') }}" class="btn btn-outline-primary mb-2">BACK TO LIST</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container p-3">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Immage</th>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $item)
                    <tr>
                        <td><img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}" style="width: 8rem"></td>
                        {{-- <th scope="row">{{$item['id']}}</th> --}}
                        <td><a class="btn btn-outline-primary" href="/comics/{{ $item->id }}">{{ $item['title'] }}</a></td>
                        
                        @if (Str::startsWith($item['price'], '$'))
                        <td>{{ $item['price'] }}</td>
                        @else
                        <td>${{ $item['price'] }}</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

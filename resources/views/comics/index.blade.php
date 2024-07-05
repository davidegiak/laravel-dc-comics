@extends('layouts.app')

@section('content')
<div id="cont" class="container">
    @foreach ($comics as $item)
        <ul class="card col-3">
            <h5> {{$item['id']}} </h5>
            <div class="imgCont">
                <img src="{{$item['thumb']}}" alt="" style="width: 100%">
            </div>
            <li><a href="/comics/{{$item->id}}"> {{$item['title']}} </a></li>
            <li> {{$item['drop_date']}} </li>
            <li> {{$item['price']}} </li>
        </ul>
    @endforeach
</div>
@endsection


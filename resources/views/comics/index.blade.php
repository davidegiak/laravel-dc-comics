@extends('layouts.app')

@section('content')
<div id="cont" class="container justify-content-center">
    @foreach ($comics as $item)
        <div id="card" class="card m-2">
            <img id="catalogImg" class="card-img-top" src="{{$item['thumb']}}" alt="">
        
            <div class="mt-5">
                <h5 class="card-title"> {{$item['id']}} </h5>
                <h4 id="title" class="card-title">{{$item['title']}}</h4>
                <p class="card-text"> {{$item['drop_date']}} </p>
                <p class="card-text"> {{$item['price']}} </p>
                <a href="/comics/{{$item->id}}"" class="btn btn-primary">MORE</a>
            </div>
        </div>
    @endforeach
</div>
@endsection

{{-- <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div> --}}
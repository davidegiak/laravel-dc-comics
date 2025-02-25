@extends('layouts.app')

@section('content')
<div class="my-3">
    <h1 class="text-center comic-neue-bold mb-2 text-uppercase">I nostri Comics</h1>
</div>
<div id="cont" class="container justify-content-center">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($comics as $item)
                    <div class="swiper-slide bg-light">
                        <p class="text-center comic-neue-bold text-dark m-0 fs-6" style="font-size: 12px;">{{$item['title']}}</p>
                        @if (Str::startsWith($item['price'], '$'))
                            <p class="text-center comic-neue-bold text-dark m-0 fs-6" style="font-size: 12px;">{{$item['price']}}</p>
                        @else
                            <p class="text-center comic-neue-bold text-dark m-0 fs-6" style="font-size: 12px;">${{$item['price']}}</p>
                        @endif
                        <a href="/comics/{{ $item->id }}">
                            <img id="catalogImg" class="" src="{{ $item['thumb'] }}" alt="{{$item ['title']}}">
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
@endsection

<style scoped>
    p {
        z-index: 99999;
    }
</style>

<footer>
    <div id="blueSection" class="my-bg p-5 mt-3 d-flex justify-content-center">
        <div id="blueCont" class="d-flex justify-content-center justify-content-around gap-3 my-container">
            <div class="d-flex align-items-center col-3 gap-2">
                <img class="imgs" src="{{ asset('/images/buy-comics-digital-comics.png') }}" alt="">
                <p class="m-0">DIGITAL COMICS</p>
            </div>
            <div class="d-flex align-items-center col-3 gap-2">
                <img class="imgs" src="{{ asset('/images/buy-comics-merchandise.png') }}" alt="">
                <p class="m-0">DIGITAL COMICS</p>
            </div>
            <div class="d-flex align-items-center col-3 gap-2">
                <img class="imgs" src="{{ asset('/images/buy-comics-subscriptions.png') }}" alt="">
                <p class="m-0">DIGITAL COMICS</p>
            </div>
            <div class="d-flex align-items-center col-3 gap-2">
                <img class="imgs" src="{{ asset('/images/buy-comics-shop-locator.png') }}" alt="">
                <p class="m-0">DIGITAL COMICS</p>
            </div>
        </div>
    </div>
    <div id="linkSection" class="p-3 d-flex justify-content-center">
        <div class="my-container d-flex justify-content-between align-items-center">
            <div>
                <a class="btn btn-outline-primary" href="#">SIGN UP NOW!</a>
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="comic-neue-bold my-text fs-5">FOLLOW US</span>
                <img src="{{asset('images/footer-facebook.png')}}" alt="">
                <img src="{{asset('images/footer-periscope.png')}}" alt="">
                <img src="{{asset('images/footer-pinterest.png')}}" alt="">
                <img src="{{asset('images/footer-twitter.png')}}" alt="">
                <img src="{{asset('images/footer-youtube.png')}}" alt="">
            </div>

        </div>
    </div>
</footer>

<style scoped lang="SCSS">
    .imgs {
        /* width: 50px; */
        height: 50px;
    }

    #linkSection {
        background-color: #222;
    }
</style>

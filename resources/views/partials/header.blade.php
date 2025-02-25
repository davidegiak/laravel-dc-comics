<header class="bg-white py-1 d-flex justify-content-center">
    <div class="d-flex justify-content-between my-container">
        <div class="left d-flex justify-content-end">
            {{-- <img id="logo" src="../../public/dc-logo.png" alt="DC"> --}}
            <img id="logo" class="text-light" src="{{ asset('images/dc-logo.png') }}" alt="DC">
        </div>
        <div>
            <div class="right h-100 d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column gap-3">
                    <a id="primoLink" class="text-dark text-decoration-none" href="{{ route('home') }}">Home</a>
                    <div id="sottoPrimo" class="underline"></div>
                </div>
                <div class="d-flex flex-column gap-3">
                    <a id="secondoLink" class="text-dark text-decoration-none mx-3" href="/comics">Lista Comics</a>
                    <div id="sottoSecondo" class="underline mx-3"></div>
                </div>
                <div class="d-flex flex-column gap-3">
                    <a id="terzoLink" class="text-dark text-decoration-none" href="{{ route('comics.create') }}">aggiungi comic</a>
                    <div id="sottoTerzo" class="underline"></div>
                </div>
               
                
            </div>
            {{-- <div class="d-flex">
                
                <div id="sottoPrimo" class="underline  col-5"></div>
                <div id="sottoPrimo" class="underline my-bg col-4"></div>
            </div> --}}
        </div>
    </div>


</header>

<script>
    if (window.location.pathname === '/' || window.location.pathname === '/home') {
        document.getElementById('sottoPrimo').classList.add('my-bg');
        document.getElementById('primoLink').classList.s;
    }
    else if (window.location.pathname === '/comics') {
        document.getElementById('sottoSecondo').classList.add('my-bg');
    }
    else if (window.location.pathname === '/comics/create') {
        document.getElementById('sottoTerzo').classList.add('my-bg');
    }
</script>

<style scoped>
    .underline{
        /* width: calc(100% / 3); */
        height: 10px;
    }
</style>


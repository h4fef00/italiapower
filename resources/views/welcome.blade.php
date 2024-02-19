<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Shop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Sezioni
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/men">Uomo</a></li>
                            <li><a class="dropdown-item" href="/women">Donna</a></li>
                            <li><a class="dropdown-item" href="/jewelery">Gioielli</a></li>
                            <li><a class="dropdown-item" href="/electronics">Elettronica</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    {{-- cerca --}}
                    <div>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    {{-- carrello deve portare a login se non autenticato --}}
                    <div>
                        <a href="/cart" class="btn">
                            <i class="bi bi-cart"></i>
                        </a>
                    </div>
                    {{-- lista preferiti --}}
                    <div>
                        <a href="/favorite" class="btn">
                            <i class="bi bi-heart"></i>
                        </a>
                    </div>
                    {{-- profilo --}}
                    {{-- controllo se c'è route login --}}
                    @if (Route::has('login'))
                        <div>
                            {{-- se è autenticato viene mostrato tasto dashboard --}}
                            @auth
                                <a href="{{ url('/profile') }}" class="btn"><i class="bi bi-person-circle"></i></a></a>
                                {{-- altrimenti vengono mostrati i link per login e registrazione --}}
                            @else
                                <a href="{{ route('login') }}" class="btn">
                                    <i class="bi bi-person-circle"></i></a>
                            @endauth
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </nav>

    {{-- contenuto principale pagina --}}
    <div class="container mt-2">
        @yield('content')
    </div>

    {{-- footer statico --}}
    <footer class="bg-body-tertiary px-5 py-3 h-25">
        {{-- sinistra --}}
        <div class="float-start">
            <p class="mb-0">Informazioni legali</p>
            <p class="mb-0">Informativa sulla privacy</p>
            <p class="mb-0">Diritto di accesso</p>
            <p class="mb-0">Blog</p>
            <p class="mb-0">Informazioni dati</p>
        </div>
        {{-- destra --}}
        <div class="float-end">
            <p class="mb-0">Trovaci anche su:</p>
            <div class="btn-group">
                <a href="/" class="btn"><i class="bi bi-facebook"></i></a>
                <a href="/" class="btn"><i class="bi bi-whatsapp"></i></a>
                <a href="/" class="btn"><i class="bi bi-instagram"></i></a>
                <a href="/" class="btn"><i class="bi bi-tiktok"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                }
            }
        })
    </script>
    @yield('scripts')


</body>

</html>

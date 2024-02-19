@extends('welcome')
@section('content')
    <div class="d-flex">
        {{-- immagine --}}
        <div class="d-block w-50">
            <div class="owl-carousel">
                <div class="item">
                    <img src="{{ $product->image }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="d-block mx-5 mt-2">
            {{-- formattare con lettere grandi --}}
            <h5 class="fw-normal">{{ ucwords($product->category) }}</h5>
            <h3 class="fw-bolder">{{ $product->title }}</h3>
            {{-- prezzo da formattare in eur --}}
            <h4 class="text-danger fw-bolder mb-0 mt-2">{{ Number::currency($product->price, in: 'EUR') }} <span
                    class="fw-normal text-body fs-6">IVA
                    inclusa</span>
            </h4>
            <form action="" class="mt-4">
                <select class="form-select select-size" aria-label="Default select example">
                    {{-- rendere dinamico in base all'articolo --}}
                    <option selected>Scegli una taglia</option>
                    <option value="s">One</option>
                    <option value="m">Two</option>
                    <option value="l">Three</option>
                </select>
            </form>
            <div class="mt-2">
                <button class="btn bg-dark text-white add-to-cart-btn">Aggiungi al carrello</button>
                <button class="btn btn-outline-dark add-to-favorite-btn"><i class="bi bi-heart"></i></button>
            </div>
            <div class="">
                <div class="card card-shipping mt-2 w-100">
                    {{-- titolo --}}
                    <div class="card-header py-2">
                        <p class="mb-0">Spedito da Shop</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        {{-- consegna plus --}}
                        <li class="list-group-item">
                            <div>
                                <i class="bi bi-truck fs-3"></i>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold mb-0">1 - 3 giorni lavorativi</p>
                                <p class="fw-bold mb-0">5,95</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Consegna rapida</p>
                                <p>Gratis con <span class="badge text-bg-warning">Plus</span></p>
                            </div>
                            <div>
                                <a href="#" class="general-link">Iscriviti ora</a>
                            </div>
                        </li>
                        {{-- consegna standard --}}
                        <li class="list-group-item">
                            <div>
                                <i class="bi bi-truck fs-3"></i>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold mb-0">Da - A</p>
                                <p class="fw-bold mb-0">4,95</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Consegna standard</p>
                            </div>
                            <div>
                                <a href="#" class="general-link">Gratis per ordini oltre 28.90*</a>
                            </div>
                        </li>
                        {{-- reso --}}
                        <li class="list-group-item">
                            <div class="d-flex">
                                <div>
                                    <i class="bi bi-arrow-counterclockwise fs-3"></i>
                                </div>
                                <div>
                                    <p class="fw-bold">100 giorni per restituire il tuo ordine</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('welcome')
@section('content')
    {{-- carrello se vuoto --}}
    @if (Cart->)
        
    @endif
    <div class="text-center p-5">
        <div>
            <div class="cart-icon-container">
                <img src="{{ asset('images/cart.png') }}" alt="">
            </div>
            <h4>Non hai nessun prodotto nel carrello!</h4>
        </div>
        <div class="row mx-0 mt-5">
            nascosto se fatto login
            <div class="col-6">
                <a href="/login" class="btn btn-outline-dark add-to-favorite-btn w-75">Accedi</a>
            </div>
            <div class="col-6">
                <a href="/" class="btn btn-dark add-to-favorite-btn w-75">Continua lo shopping</a>
            </div>
        </div>
    </div>
    {{-- carrello se ha product>=1 --}}
    <div class="px-5 py-3 bg-body-tertiary">
        <div class="row mx-0">
            {{-- sezione dati nel carrello --}}
            <div class="col-8 px-0 bg-white mt-3">
                <h4 class="mb-0">Carrello (*length articoli)</h4>
                <div class="container-product-cart mt-2">
                    <img src="{{ asset('images/cart.png') }}" width="100" class="px-4">
                    <div class="d-inline-block">
                        <p class="mb-0">Marca</p>
                        <p class="mb-0 text-body">Nome prodotto</p>
                        <p class="mb-0 text-bold">Prezzo</p>
                        <span class="badge text-bg-warning">Plus</span>
                        <p class="mb-0 d-inline">Consegna rapida</p>
                    </div>
                    <div class="float-end">
                        <form action="">
                            <select class="form-select rounded-0 border border-black focus-ring"
                                aria-label="Default select example"
                                style="--bs-focus-ring-color: rgba(var(--bs-body-bg-rgb))">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            {{-- sezione totale e bottone paga --}}
            <div class="col-4 bg-white ">
                {{-- box con limite ordine --}}
                <div class="bg-primary bg-opacity-10 mt-3 p-3">
                    <i class="bi bi-info-circle"></i>
                    <div class="d-inline">
                        <small class="d-inline">Se il tuo ordine raggiunge 28,90 € la spedizione è gratuita. Per i
                            membri
                            Plus,
                            è sempre offerta
                        </small>
                    </div>
                </div>
                {{-- totali --}}
                <h3 class="mb-0">Totale</h3>
                {{-- subtotale --}}
                <div class="row mx-0">
                    <div class="col-6">
                        <p class="mb-0">Subtotale</p>
                    </div>
                    <div class="col-6">
                        <p class="mb-0">12.99</p>
                    </div>
                </div>
                {{-- totale --}}
                <div class="row mx-0">
                    <div class="col-6">
                        <p class="mb-0">Totale</p>
                    </div>
                    <div class="col-6">
                        <p class="mb-0">12.99</p>
                    </div>
                </div>
                <hr>
                {{-- totale con iva --}}
                <div class="row mx-0 fw-bold">
                    <div class="col-6">
                        <p class="mb-0">Totale <span>(iva inclusa)</span></p>
                    </div>
                    <div class="col-6">
                        <p class="mb-0">12.99</p>
                    </div>
                    <div>
                        <button class="btn btn-dark rounded-0 w-100">PROCEDI</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

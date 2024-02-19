<div class="col">
    <div class="card text-center h-100">
        <a href="/product/{{ $id }}" class="text-decoration-none text-black">
            <div class="card-img p-4">
                <img src="{{ $image }}" class="card-img-top mx-auto d-block" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title text-truncate">{{ $title }}</h5>
                <p class="card-text text-truncate">{{ $description }}</p>
            </div>
        </a>
        <div class="card-footer">
            <div class="row mx-0">
                <div class="col-10">
                    <a href="/product/{{ $id }}" class="btn btn-dark w-100 rounded-0">Guarda</a>
                </div>
                <div class="col-2 px-0">
                    <button {{ $attributes->merge(['class' => 'btn btn-outline-dark add-to-favorite-btn ']) }}><i
                            class="bi bi-cart"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

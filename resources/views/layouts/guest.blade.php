@extends('welcome')
@section('content')
    <x-content-center class="mb-3">
        @if (Route::is('register'))
            <h4>Bello rivederti!</h4>
            <div>
                <a href="/login" class="btn btn-outline-dark rounded-0 w-100">Accedi</a>
            </div>
            <hr>
        @endif

        @if (Route::is('login'))
            <h4>Bello rivederti!</h4>
        @else
            <h4>Sono un nuovo cliente</h4>
        @endif
        <div>
            {{ $slot }}
        </div>
    </x-content-center>
@endsection

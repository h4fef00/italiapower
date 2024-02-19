@extends('welcome')
@section('content')
    <div class="row row-cols-3 g-4 mx-0">
        @foreach ($products as $product)
            <x-card-product class="w-100" :image="$product->image" :title="$product->title" :description="$product->description" :id="$product->id" />
        @endforeach
    </div>
@endsection

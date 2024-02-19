@extends('welcome')
@section('content')
    <div class="row row-cols-3 g-4 mx-0">
        @foreach ($products as $product)
            <x-card-product :image="$product->image" :title="$product->title" :description="$product->description" :id="$product->id" class="w-100" />
        @endforeach
    </div>
@endsection

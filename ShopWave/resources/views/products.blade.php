@extends('layout')

@section('content')

<section class="product-cards-container">
    @foreach ($products as $product)
        <div class="product-card">
            <img class="card-image" src="{{ $product->imageUrl }}">
            <div class="card-text-container">
                <h1 class="product-name">{{ $product->name }}</h1>
            </div>
            <button class="card-button">SEE PRODUCT</button>    
        </div>
        
    @endforeach
</section>

@endsection
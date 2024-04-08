@extends('layout')

@section('content')
    <div class="item-section">

        <div class="item-image-container">
            <img class="item-image" src="{{ asset($product->imageUrl) }}">
        </div>
            
        <div class="item-text-container">
            <p class="item-category-p">{{ $product->category }}</p>
            <h1 class="item-name">{{ $product->name }}</h1>
            <p class="item-description">Product description which will come later from the database, need a few sentences here. Some more additional text that describes the current product.</p>
            <p class="item-price">$ 599 (later from database)</p>
            <a class="product-button">Add to cart</a>
        </div>

    </div>
   
@endsection
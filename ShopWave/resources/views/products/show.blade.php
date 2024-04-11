@extends('layout')

@section('content')
    <p id="back-button">⬅ Back</p>
    <div class="item-section">
        <div class="item-image-container">
            <img class="item-image" src="{{ asset($product->imageUrl) }}">
        </div>
@php
    $selectedSize = $product->size;
@endphp
        <div class="item-text-container">
            <p class="item-category-p">{{ $product->category }}</p>
            <h1 class="item-name">{{ $product->name }}</h1>
            <p class="item-description">Product description which will come later from the database, need a few sentences here. Some more additional text that describes the current product.</p>
            <p class="item-price">{{ $product->price }} $</p>
            <div>
                <ul class="sizes-list">
                    @foreach($sizes as $size)
                        <li id="size_{{ $size }}" class="size @if($size === $selectedSize) activeSize @endif">{{ $size }}</li>
                    @endforeach
                </ul>
            </div>
            <a class="product-button item-button">Add to cart</a>
        </div>

    </div>

@endsection

<script>
    let defaultSize = "{{ $selectedSize }}";
</script>

@extends('layout')

@section('content')
    <p id="back-button">⬅ Back</p>
    <div class="item-section">
        <div class="item-image-container">
            <img class="item-image" src="{{ asset($product->imageUrl) }}">
        </div>
        @php
            $selectedSize = $product->size;
            $selectedProductId = $product->id;
        @endphp
        <div class="item-text-container">
            <p class="item-category-p">{{ $product->category }}</p>
            <h1 class="item-name">{{ $product->name }}</h1>
            <p class="item-description">Product description which will come later from the database, need a few
                sentences here. Some more additional text that describes the current product.</p>
            <p class="item-price">{{ $product->price }} $</p>
            <input type="hidden" id="selected_size" name="selected_size">
            <div>
                <ul class="sizes-list">
                    @foreach($products as $p)
                        <li id="size_{{ $p->size }}"
                            class="size @if($p->size === $selectedSize) activeSize @endif"
                            data-product-id="{{ $p->id }}">{{ $p->size }}</li>
                    @endforeach
                </ul>
            </div>
            <button id="addToCartButton" type="submit" data-link="{{ route('cart.store', ['id' => $selectedProductId]) }}"
                    class="product-button item-button">Add to cart
            </button>


        </div>

    </div>

@endsection

<script>
    let defaultSize = "{{ $selectedSize }}";
    let selectedId = "{{ $selectedProductId }}";
</script>

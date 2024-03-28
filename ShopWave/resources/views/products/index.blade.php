@extends('layout')

@section('content')
<section class="category-hero">
    <h1 class="category-hero-h1">{{$products[0]->category}}</h1>
</section>


@foreach($products as $index => $product)
    @if ($index % 2 == 0)
        <section class="zig-zag">
            <div class="image-side">
                <img src="{{ $product->imageUrl }}">
            </div>
            <div class="text-side">
                <h1>{{$product->name}}</h1>
                <p class="orange">Some additional text that looks nice</p>
                <p>Unique description for the product, that shows how insane and unique this product is. Doesn't matter how long text I add here, the text container will get the job done. I can add description for my model paste that text here.</p>
                <button class="product-button zig-zag-button">SEE PRODUCT</button>
            </div>
        </section>
    @else
        <section class="zig-zag">
            <div class="text-side">
                <h1>{{$product->name}}</h1>
                <p class="orange">Some additional text that looks nice</p>
                <p>Unique description for the product, that shows how insane and unique this product is. Doesn't matter how long text I add here, the text container will get the job done. I can add description for my model paste that text here.</p>
                <button class="product-button zig-zag-button">SEE PRODUCT</button>
            </div>
            <div class="image-side">
                <img src="{{ $product->imageUrl }}">
            </div>
        </section>
    @endif
@endforeach



<section class="image-text-section">
    <h1>Categories</h1>
    <div class="image-container">
        <div class="image-wrapper">
            <img src="/images/sneaker-2.png" alt="Első kép">
            <h1>Sneakers</h1>
            <a>SHOP ></a>
        </div>
        <div class="image-wrapper">
            <img src="/images/boot-1.png" alt="Második kép">
            <h1>Boots</h1>
            <a>SHOP ></a>
        </div>
        <div class="image-wrapper">
            <img src="/images/high-heels-1.png" alt="Harmadik kép">
            <h1>High heels</h1>
            <a>SHOP ></a>
        </div>
    </div>
</section>
@endsection

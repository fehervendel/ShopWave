@extends('layout')

@section('content')
<section class="category-hero">
    <h1 class="category-hero-h1">SNEAKERS</h1>
</section>

<ul>
    @foreach($products as $product)
        <li>{{ $product->name }}</li>
    @endforeach    
</ul>   


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
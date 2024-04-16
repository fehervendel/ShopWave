@extends('layout')

@section('content')
    @php
        $total = 0;
    @endphp

    @if(is_string($content))
        <h1 class="cart-empty">{{ $content }}</h1>
        <section class="image-text-section">
            <h1 id="categories-text">Shop now</h1>
            <div class="image-container">
                <div class="image-wrapper">
                    <img src="/images/sneaker-2.png" alt="Első kép">
                    <h1>Sneakers</h1>
                    <a href="{{ route('products.index', ['category' => 'sneakers']) }}">SHOP ></a>
                </div>
                <div class="image-wrapper">
                    <img src="/images/boot-1.png" alt="Második kép">
                    <h1>Boots</h1>
                    <a href="{{ route('products.index', ['category' => 'boots']) }}">SHOP ></a>
                </div>
                <div class="image-wrapper">
                    <img src="/images/high-heels-1.png" alt="Harmadik kép">
                    <h1>High heels</h1>
                    <a href="{{ route('products.index', ['category' => 'high-heels']) }}">SHOP ></a>
                </div>
            </div>
        </section>
    @else
        <div class="cart-container">
            <div class="checkout">
                <h1>Checkout</h1>
            </div>

            <div class="cart-info">
                <div class="cart-info-content">

                <h1 class="summary">Summary</h1>
                @foreach($content as $product)
                    @php
                        $total += $product->price;
                    @endphp
                    <div class="cart-item">
                        <img class="cart-item-image" src="{{$product->imageUrl}}">
                        <div class="item-name-price-container">
                            <h1 class="cart-item-name">{{ $product->name }}</h1>
                            <p class="cart-item-price">{{ $product->price }} $</p>
                        </div>
                        <form action="{{ route('cart.destroy', ['id' => $product->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="cart-item-remove" href="">Remove</button>
                        </form>
                    </div>
                @endforeach
                    <div class="cart-info-price-container">
                        <h1 class="price-text">Total</h1>
                        <h1 class="cart-total">$ {{ $total }}</h1>
                    </div>
                    <div class="cart-info-price-container">
                        <h1 class="price-text">Shipping</h1>
                        <h1 class="cart-total">$ 20</h1>
                    </div>
                    <div class="cart-info-price-container">
                        <h1 class="price-text">Vat(included)</h1>
                        <h1 class="cart-total">$ {{ number_format($total * 0.27, 2) }}</h1>
                    </div>
                    <div id="grand" class="cart-info-price-container">
                        <h1 class="price-text">Total</h1>
                        <h1 class="cart-total-grand">$ {{ $total + 20 }}</h1>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

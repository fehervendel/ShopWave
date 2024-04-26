@extends('layout')

@section('content')
    @php
        $total = 0;
        $name = "";
        $email = "";
        $phoneNumber = "";
        $address = "";
        $ZIPCode = "";
        $city = "";
        $country = "";
        $paymentMethod = "";
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
        <form name="order-form" action="{{ route('orders.store') }}" method="post">
            @csrf
            @method('POST')
        <div class="cart-container">

            <div class="checkout">
                <h1>Checkout</h1>
                <h2>Billing details</h2>

                <div class="checkout-flex">
                    <div>
                        <p>Name</p>
                        <input type="text" name="name" placeholder="John Doe" value="{{ $name }}">
                    </div>
                    <div>
                        <p>Email Address</p>
                        <input type="email" name="email" placeholder="john.doe@email.com" value="{{ $email }}">
                    </div>
                </div>
                <p>Phone Number</p>
                <input class="last-item" type="tel" name="phoneNumber" placeholder="+36 70 123-4567" value="{{ $phoneNumber }}">
                <h2>Shipping info</h2>
                <p>Address</p>
                <input id="long-input" type="text" name="address" placeholder="9999 Somestreet" value="{{ $address }}">
                <div class="checkout-flex">
                    <div>
                        <p>ZIP Code</p>
                        <input type="number" name="ZIPCode" placeholder="10001" value="{{ $ZIPCode }}">
                    </div>
                    <div>
                        <p>City</p>
                        <input type="text" name="city" placeholder="New York" value="{{ $city }}">
                    </div>
                </div>
                <p>Country</p>
                <input type="text" placeholder="United States" name="country" class="last-item" value="{{ $country }}">
                <h2>Payment details</h2>
                <p>Payment Method</p>
                <div class="checkout-flex">
                    <div id="checkbox1">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="paymentMethod" value="Bank Transfer"/>
                            <span class="checkmark"></span>
                            <p class="checkbox-p">Bank Transfer</p>
                        </label>
                    </div>

                    <div id="checkbox2">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="paymentMethod" value="Cash on Delivery"/>
                            <span class="checkmark"></span>
                            <p class="checkbox-p">Cash on Delivery</p>
                        </label>
                    </div>
                </div>
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
                            <p id="itemPrice" class="cart-item-price">{{ $product->price }} $</p>
                            <p class="cart-item-size">{{ $product->size }}</p>
                        </div>
                        <div class="cart-item-remove-container">
                                <button id="removeItemButton" data-link="{{ route('cart.destroy', ['id' => $product->id]) }}" class="cart-item-remove">Remove</button>
                        </div>
                    </div>
                @endforeach
                    <div class="cart-info-price-container">
                        <h1 class="price-text">Total</h1>
                        <h1 id="totalPrice" class="cart-total">$ {{ $total }}</h1>
                    </div>
                    <div class="cart-info-price-container">
                        <h1 class="price-text">Shipping</h1>
                        <h1 class="cart-total">$ 20</h1>
                    </div>
                    <div class="cart-info-price-container">
                        <h1 class="price-text">Vat(included)</h1>
                        <h1 id="vatPrice" class="cart-total">$ {{ number_format($total * 0.27, 2) }}</h1>
                    </div>
                    <div id="grand" class="cart-info-price-container">
                        <h1 class="price-text">Total</h1>
                        <h1 id="grandTotalPrice" class="cart-total-grand">$ {{ $total + 20 }}</h1>
                    </div>
                    <div class="continue-container">
                        <input id="formTotal" type="hidden" name="totalPrice">
                        <button class="continue" type="submit">Continue & pay</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    @endif

@endsection

<script src="js/checkbox.js"></script>

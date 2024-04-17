@extends('layout')

@section('content')
                            {{-- Hero section --}}
    <section class="hero-section">
        <div class="hero-content-left">
            <h1 class="hero-title">GLOWSTEP-X1 MODEL</h1>
            <p class="section-text">Discover the perfect comfort with our new range of footwear.<br>Step up your fashion game and embrace the essence of GLOWSTEP.<br>Find your perfect fit today and experience luxury for your feet.</p>
            <button class="product-button">SEE PRODUCT</button>
        </div>
        <div class="hero-content-right">
            <img src="/images/sneaker-1.png" class="hero-img" alt="Kép leírása">
        </div>
    </section>
                            {{-- Category section --}}
    <section class="image-text-section">
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
                            {{-- Parallax section --}}
    <div class="parallax">
        <div class="parallax-background"></div>
            <div class="parallax-content">
                <div class="parallax-text-container">
                    <div>
                        <h1>CHECK OUT OUR<BR> <span class="neon">NEON</span> MODELS NOW!</h1>
                        <P>"Step into the future with our vibrant neon shoes! <br> Illuminate your style with our collection of electrifying footwear. <br> Get ready to shine bright with our neon-colored kicks!"</P>
                    </div>
                </div>
                <button class="parallax-button">SEE PRODUCTS</button>
            </div>
    </div>
                            {{-- Section 1 --}}
    <section class="content-section gray">
        <div class="content-left">
            <h1 class="section-h1">CHERRY CRUSH</h1>
            <button class="product-button product-button-2">SEE PRODUCT</button>
        </div>
        <div class="content-right">
            <img src="/images/high-heels-2.png" class="section-image" id="high-heels-2" alt="Kép leírása">
        </div>
    </section>
                            {{-- Section 2 --}}
    <section class="content-section section-2">
        <div class="content-2">
            <img src="/images/boot-2.png" class="section-image boot-2" alt="Kép leírása">
        </div>
        <div class="content-left content-2-2">
            <h1 class="section-h1">ROXXTAR SPIKE</h1>
            <button class="product-button product-button-2">SEE PRODUCT</button>
        </div>
    </section>
                            {{-- Section 3 --}}
    <section class="content-section section-3">
        <div class="content-left">
            <h1 class="section-h1 luxury">EXPERIENCE LUXURY</h1>
            <p class="section-3-p">"Step into style with our stunning high heels! Elevate your look and command attention with our exquisite collection. From classic designs to trendy statement pieces, we have the perfect pair for every occasion. Discover your confidence, stride with elegance, and make a statement with our high heels today!"</p>
        </div>
        <div class="content-left content-3">
            <img src="/images/high-heels-3.png" class="section-image high-heels-3" alt="Kép leírása">
        </div>
    </section>

@endsection

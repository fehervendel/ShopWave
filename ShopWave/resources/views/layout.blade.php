<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopWave</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&family=Quicksand&display=swap">
    {{-- <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon"> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/js/parallax.js') }}"></script>
</head>

<body>
    <header>
        {{-- <img src="{{}}" alt="logo"> --}}
        <nav>
            <a class="home-button">ShopWave</a>
            <ul>
                <li><a>Home</a></li>
                <li><a>Categories</a></li>
                <li><a>Products</a></li>
                <li><a>New</a></li>
                {{-- @if (auth()->check()) --}}
                <li><a>Profile</a></li>
                {{-- <li>
                    <form method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li> --}}
                {{-- @else --}}
                <li><a>Login</a></li>
                {{-- @endif --}}
            </ul>
            <img class="nav-icon" src="/images/cart.png">
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="footer-left">
            <h1>SHOPWAVE</h1>
            <p class="description">Shopwave is the perfect solution for a fast professional webshop <br> You can change any part of the site, colors, pictures and text easily. <br> Create your dream business website now!</p>
            <p>© 2024 ShopWave</p>
        </div>
        <div class="footer-right">
            <div class="footer-menu">
                <ul>
                    <li><a>HOME</a></li>
                    <li><a>CATEGORIES</a></li>
                    <li><a>PRODUCTS</a></li>
                    <li><a>NEW</a></li>
                </ul>
            </div>
            <div class="social-icons">
                <ul>
                    <li><img src="/images/instagram-icon.png"></li>
                    <li><img src="/images/facebook-icon.png"></li>
                    <li><img src="/images/twitter-icon.png"></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>


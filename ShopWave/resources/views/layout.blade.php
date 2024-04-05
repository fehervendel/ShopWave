<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopWave</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&family=Quicksand&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon"> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/parallax.js"></script>
    <script src="/js/showSidebar.js"></script>
    <script src="/js/hideSidebar.js"></script>
    <script src="/js/dropdown.js"></script>
</head>

<body>
<header>
    {{-- <img src="{{}}" alt="logo"> --}}
    <nav>
        <a class="home-button" href="{{ url('/') }}">ShopWave</a>
        <ul class="sidebar">
            <li onClick=hideSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 -960 960 960" width="40"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" fill="white"/></svg></li>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li id="categoryDropdown-phone"><a>Categories</a>
                <ul class="dropdown-menu-phone" id="categoryMenu-phone">
                    <li><a href="{{ route('products.index', ['category' => 'sneakers']) }}">Sneakers</a></li>
                    <li><a href="{{ route('products.index', ['category' => 'boots']) }}">Boots</a></li>
                    <li><a href="{{ route('products.index', ['category' => 'high-heels']) }}">High-heels</a></li>
                </ul>
            </li>
            <li><a href="{{ route('products') }}">Products</a></li>
            <li><a>New</a></li>
            {{-- @if (auth()->check()) --}}
            {{-- <li><a>Profile</a></li> --}}
            {{-- <li>
                <form method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li> --}}
            {{-- @else --}}
            <li><a>Login</a></li>
            {{-- @endif --}}
            <li><img class="nav-icon" src="/images/cart.png"></li>
        </ul>
        <ul>
            <li class="hideOnMobile"><a href="{{ route('welcome') }}">Home</a></li>
            <li class="hideOnMobile" id="categoryDropdown"><a id="categories-dropdown">Categories</a>
                <ul class="dropdown-menu" id="categoryMenu">
                    <li><a href="{{ route('products.index', ['category' => 'sneakers']) }}">Sneakers</a></li>
                    <li><a href="{{ route('products.index', ['category' => 'boots']) }}">Boots</a></li>
                    <li><a href="{{ route('products.index', ['category' => 'high-heels']) }}">High-heels</a></li>
                </ul>
            </li>
            <li class="hideOnMobile"><a href="{{ route('products') }}">Products</a></li>
            <li class="hideOnMobile"><a>New</a></li>
            {{-- @if (auth()->check()) --}}
            {{-- <li class="hideOnMobile"><a>Profile</a></li> --}}
            {{-- <li>
                <form method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li> --}}
            {{-- @else --}}
            <li class="hideOnMobile"><a>Login</a></li>
            {{-- @endif --}}
            <li class="hideOnMobile"><img class="nav-icon" src="/images/cart.png"></li>
            <li class="menu-button" onclick=showSidebar()>
                <svg xmlns="http://www.w3.org/2000/svg" height="45" viewBox="0 -960 960 960" width="45">
                    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" fill="white"/>
                </svg>
            </li>
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer class="footer">
    <div class="footer-left">
        <a class="home-button" href="{{ url('/') }}">SHOPWAVE</a>
        <p class="description">Shopwave is the perfect solution for a fast professional webshop <br> You can change any
            part of the site, colors, pictures and text easily. <br> Create your dream business website now!</p>
        <p>© 2024 ShopWave</p>
    </div>
    <div class="footer-right">
        <div class="footer-menu">
            <ul>
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li id="categoryDropdown-footer"><a>CATEGORIES</a>
                    <ul class="dropdown-menu-footer" id="categoryMenu-footer">
                        <li><a href="{{ route('products.index', ['category' => 'sneakers']) }}">Sneakers</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'boots']) }}">Boots</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'high-heels']) }}">High-heels</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('products') }}">PRODUCTS</a></li>
                <li><a>NEW</a></li>
            </ul>
        </div>
        <div class="social-icons">
            <ul>
                <li><img class="social-icon" src="/images/instagram-icon.png"></li>
                <li><img class="social-icon" src="/images/facebook-icon.png"></li>
                <li><img class="social-icon" src="/images/twitter-icon.png"></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>


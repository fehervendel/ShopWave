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
    <footer>
        <p>© 2024 ShopWave</p>
    </footer>
</body>
</html>
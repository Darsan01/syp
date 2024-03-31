<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}"> <!-- Modify the href attribute to use asset helper -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>House Rental</title>
</head>

<body class="antialiased">
    <header>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <div class="logo">
                        <h1>House Rental</h1>
                    </div>
                    <ul>
                        <li><a href="{{ url('/properti') }}">PROPERTIES</a></li><!-- Link to the PROPERTIES route -->
                        <li><a href="{{ url('/about') }}">ABOUT US</a></li> <!-- Link to the About Us route -->
                        <li><a href="{{ url('/contact') }}">CONTACT US</a></li> <!-- Link to the Contact Us route -->
                    </ul>


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <mai class="py-4">
                @yield('content')
            </mai>
        </div>
    </header>

    <! Home page of with background img--->
        <main>
            <section class="login">
                <div class="container">
                    <form>
                        <h2>LOGIN</h2>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password">
                            <div class="checkbox">
                                <label for="remember-me">
                                    <input type="checkbox" id="remember-me" name="remember-me">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="button">
                            <button type="submit">LOGIN</button>
                        </div>
                        <p> Don't have an account? <a href="/register1">Register Now!</a></p>
                        Or login with
                        <div class="social-login">
                            <a href="{{ route('auth.facebook') }}">
                                <img src="dist/img/social/Facebook_Logo_(2019).png" alt="Facebook">
                            </a>
                            <a href="{{ route('auth.google') }}">
                                <img src="dist/img/social/images.png" alt="Google">
                            </a>
                        </div>
                    </form>

                </div>
            </section>
        </main>

        <section class="featured-properties">
            <h2>Featured Properties</h2>
            <div class="properties-container">
                <div class="property" data-bedrooms="3">
                    <img src="dist/img/Property img/images (9).jpeg" alt="Property 1">
                    <div class="details">
                        <h3>Property 1</h3>
                        <p>Rent: $2,500</p>
                        <p>Bedrooms: <span class="bedrooms">3</span></p>
                        <button class="more-info">More Info</button>
                    </div>
                </div>
                <div class="property" data-bedrooms="2">
                    <img src="dist/img/Property img/images (9).jpeg" alt="Property 2">
                    <div class="details">
                        <h3>Property 2</h3>
                        <p>Rent: $3,000</p>
                        <p>Bedrooms: <span class="bedrooms">2</span></p>
                        <button class="more-info">More Info</button>
                    </div>
                </div>
                <div class="property" data-bedrooms="4">
                    <img src="dist/img/Property img/images (2).jpeg" alt="Property 3">
                    <div class="details">
                        <h3>Property 3</h3>
                        <p>Rent: $4,000</p>
                        <p>Bedrooms: <span class="bedrooms">4</span></p>
                        <button class="more-info">More Info</button>
                    </div>
                </div>
            </div>
            <div class="properties-container">
                <div class="property" data-bedrooms="3">
                    <img src="dist/img/Property img/images (3).jpeg" alt="Property 1">
                    <div class="details">
                        <h3>Property 4</h3>
                        <p>Rent: $2,500</p>
                        <p>Bedrooms: <span class="bedrooms">3</span></p>
                        <button class="more-info">More Info</button>
                    </div>
                </div>
                <div class="property" data-bedrooms="2">
                    <img src="dist/img/Property img/images (4).jpeg" alt="Property 2">
                    <div class="details">
                        <h3>Property 5</h3>
                        <p>Rent: $3,000</p>
                        <p>Bedrooms: <span class="bedrooms">2</span></p>
                        <button class="more-info">More Info</button>
                    </div>
                </div>
                <div class="property" data-bedrooms="4">
                    <img src="dist/img/Property img/images (7).jpeg" alt="Property 3">
                    <div class="details">
                        <h3>Property 6</h3>
                        <p>Rent: $4,000</p>
                        <p>Bedrooms: <span class="bedrooms">4</span></p>
                        <button class="more-info">More Info</button>
                    </div>
                </div>
            </div>
            <div class="properties-container">
                <div class="property" data-bedrooms="3">
                    <img src="dist/img/Property img/images (8).jpeg" alt="Property 1">
                    <div class="details">
                        <h3>Property 7</h3>
                        <p>Rent: $2,500</p>
                        <p>Bedrooms: <span class="bedrooms">3</span></p>
                        <button class="more-info">More Info</button>
                    </div>
                </div>
                <div class="property" data-bedrooms="2">
                    <img src="dist/img/Property img/images (9).jpeg" alt="Property 2">
                    <div class="details">
                        <h3>Property 8</h3>
                        <p>Rent: $3,000</p>
                        <p>Bedrooms: <span class="bedrooms">2</span></p>
                        <button class="more-info">More Info</button>
                    </div>
                </div>
                <div class="property" data-bedrooms="4">
                    <img src="dist/img/Property img/images (10).jpeg" alt="Property 3">
                    <div class="details">
                        <h3>Property 9</h3>
                        <p>Rent: $4,000</p>
                        <p>Bedrooms: <span class="bedrooms">4</span></p>
                        <button class="more-info">More Info</button>
                    </div>
                </div>
            </div>
        </section>



        <footer>
            <div class="Container">
                <div class="footer-content">
                    <div class="footer-logo">
                        <h1>House Rental</h1>
                    </div>
                    <div class="footer-links">
                        <ul>
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            <li><a href="{{ url('/properti') }}">Properties</a></li>
                        </ul>
                    </div>
                    <div class="footer-social">
                        <h3>Follow us on</h3>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100089187625238" target="_blank">
                                    <img src="dist/img/social/Facebook_Logo_(2019).png" alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="dist/img/social/Logo_of_Twitter.svg.webp" alt="Twitter">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/darsan_khanal/" target="_blank">
                                    <img src="dist/img/social/images.jpeg" alt="Instagram">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>



</body>

</html>

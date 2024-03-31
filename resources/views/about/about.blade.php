<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - House Rental</title>
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}"> 
    
</head>

<body>
    <header id="navbar">
        <div class="container">
            <div class="logo">
                <h1><a href="{{ url('/home') }}">House Rental</a></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ url('/properti') }}">PROPERTIES</a></li>
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="{{ url('/contact') }}">CONTACT US</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
    <div class="Container">
            <h1>About Us</h1>
            <p>Welcome to House Rental! We are dedicated to helping you find the perfect home for your needs. Whether you're looking to rent or buy, we've got you covered. Our team of experts is here to assist you every step of the way.</p>
        </div>
    
        <!-- Your About Us content here -->
    </main>
    <script src="script.js"></script>

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
                            <a href="#">
                                <img src="dist/img/social/Facebook_Logo_(2019).png" alt="Facebook">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="dist/img/social/Logo_of_Twitter.svg.webp" alt="Twitter">
                            </a>
                        </li>
                        <li>
                            <a href="#">
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

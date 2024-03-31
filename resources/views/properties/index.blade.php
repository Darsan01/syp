<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties - House Rental</title>
    <link rel="stylesheet" href="{{ asset('css/properties.css') }}">
</head>

<body>
    <header id="navbar">
        <div class="container">
            <div class="logo">
                <h1><a href="{{ url('/home') }}">House Rental</a></h1>
            </div>
            <nav>
                <ul>
                    <li>PROPERTIES</li>
                    <li><a href="{{ url('/about') }}">ABOUT US</a></li>
                    <li><a href="{{ url('/contact') }}">CONTACT US</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>


    <main>
        <section class="featured-properties">
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
                    <img src="dist/img/Property img/images (8).jpeg" alt="Property 2">
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
    </main>

    
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




    <script src="script.js"></script>
</body>

</html>

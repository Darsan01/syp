<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - House Rental</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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
                    <li><a href="{{ url('/about') }}">ABOUT US</a></li>
                    <li>CONTACT US</li>.
                </ul>
            </nav>
        </div>
    </header>


    <main>

        <div class="Container2">
            <h2>Contact Us</h2>
            <form>
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your Message</label>
                <textarea id="message" name="message" required></textarea>

                <input type="submit" value="Send Message">
            </form>
        </div>
        <!-- Your Contact Us content here -->
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

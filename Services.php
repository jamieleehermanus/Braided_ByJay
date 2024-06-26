<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Braided by Jay</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Container for the entire page content -->
    <div class="container">
        <!-- Header section with logo, search bar, and icons -->
        <header>
            <div class="logo">
                <!-- Logo links back to homepage -->
                <a href="Homepage.php"><img src="images/logo.jpg" alt="Braided by Jay Logo"></a>
            </div>
            <!-- Search bar allows users to search for products/services -->
            <div class="search-bar">
                <form action="search_results.php" method="GET">
                    <input type="text" name="query" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
            </div>
            <!-- Icons for favorites, cart, and contact -->
            <div class="icons">
                <a href="cart.php"><img src="images/cart.jpg" alt="Cart"></a>
                <a href="contact.php"><img src="images/phone icon.png" alt="Phone"></a>
                <a href="Logout.php"><img src="images/logout.jpg" alt="Logout"></a>
            </div>
        </header>

        <!-- Main content section -->
        <section class="main-content">
            <!-- Inserted image at the beginning of services section -->
            <div class="poster-container">
                <img src="images/Poster.jpg" alt="Poster" class="poster-image">
            </div>
            
            <!-- Page title -->
            <h1>Our Services</h1>
            
            <!-- Service list -->
            <ul class="service-list">
                <li>
                    <!-- Service 1: Fulani Braids -->
                    <h2>Fulani Braids</h2>
                    <p>Transform your look with our expert Fulani braiding techniques.</p>
                    <img src="images/fulani.jpg" alt="Fulani Braids">
                </li>
                <li>
                    <!-- Service 2: Box Braids -->
                    <h2>Box Braids</h2>
                    <p>Classic and versatile box braids to suit any style.</p>
                    <img src="images/boxbraids.jpg" alt="Box Braids">
                </li>
                <li>
                    <!-- Service 3: Knotless Braids -->
                    <h2>Knotless Braids</h2>
                    <p>Get sleek and stylish knotless braids that will turn heads.</p>
                    <img src="images/knotless.jpg" alt="Knotless Braids">
                </li>
                <li>
                    <!-- Service 4: Touch-Up Services -->
                    <h2>Touch-Up Services</h2>
                    <p>Maintain your braids and keep them looking fresh with our touch-up services.</p>
                    <img src="images/touchup.jpg" alt="Touch-Up Services">
                </li>
                <li>
                    <!-- Service 5: Take Down Services -->
                    <h2>Take Down Services</h2>
                    <p>Professional braid take down services to protect your hair.</p>
                    <img src="images/takedown.jpg" alt="Take Down Services">
                </li>
            </ul>
        </section>

        <!-- Navigation buttons -->
        <div class="nav-buttons">
            <button onclick="location.href='Homepage.php'">
                <img src="images/homepage.jpg" alt="Home" class="nav-icon">Homepage
            </button>
            <button onclick="location.href='Services.php'">
                <img src="images/services.jpg" alt="Services" class="nav-icon">Services
            </button>
            <button onclick="location.href='Bookings.php'">
                <img src="images/bookings.jpg" alt="Bookings" class="nav-icon">Bookings
            </button>
            <button onclick="location.href='Products.php'">
                <img src="images/products.jpg" alt="Products" class="nav-icon">Products
            </button>
            <button onclick="location.href='AboutUs.php'">
                <img src="images/aboutus.jpg" alt="About Us" class="nav-icon">About Us
            </button>
            <button onclick="location.href='Reviews.php'">
                <img src="images/reviews.jpg" alt="Reviews" class="nav-icon">Reviews
            </button>
        </div>
    </div>
</body>
</html>

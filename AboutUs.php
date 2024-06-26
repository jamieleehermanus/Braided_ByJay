<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Braided by Jay</title>
    <link rel="stylesheet" type="text/css" href="aboutus.css">
</head>
<body>
    <!-- Header section with logo, search bar, and icons -->
    <header>
        <div class="logo">
            <a href="Homepage.php"><img src="images\logo.jpg" alt="Braided by Jay Logo"></a>
        </div>
        <div class="search-bar">
            <form action="search_results.php" method="GET">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="icons">
            
            <a href="cart.php"><img src="images\cart.jpg" alt="Cart"></a>
            <a href="contact.php"><img src="images\phone icon.png" alt="Phone"></a>
            <a href="Logout.php"><img src="images\logout.jpg" alt="Logout"></a>
        </div>
    </header>

    <!-- Main content section -->
    <div class="main-content">
        <h2>About Us</h2>
        <div class="story">
            <h3>Our Story</h3>
            <p>Braided by Jay was founded by Jaylin in 2010 with a passion for creating beautiful and intricate braids.
                Over the years, we have grown into a team of talented stylists who are dedicated to providing top-notch hair braiding services. 
                Our journey has been fueled by our love for the art of braiding and our desire to make our clients feel confident and beautiful.</p>
        </div>
        <div class="mission-vision">
            <h3>Mission</h3>
            <p>Our mission is to provide exceptional hair braiding services that enhance the natural beauty of our clients while promoting healthy hair care practices.</p>
            <h3>Vision</h3>
            <p>Our vision is to be the leading hair braiding salon in our community, known for our creativity, quality, and commitment to customer satisfaction.</p>
        </div>

        <!-- Profiles of stylists -->
        <div class="profiles">
            <div class="profile">
                <img src="images\jaylin.jpg" alt="Jaylin">
                <h4>Jaylin</h4>
                <p>Founder and Lead Stylist</p>
            </div>
            <div class="profile">
                <img src="images\bernice.jpg" alt="Bernice">
                <h4>Bernice</h4>
                <p>Senior Stylist</p>
            </div>
            <div class="profile">
                <img src="images\tashnay.jpg" alt="Tashnay">
                <h4>Tashnay</h4>
                <p>Stylist</p>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="contact-info">
            <h3>Contact Us</h3>
            <p>Email: info@braidedbyjay.com</p>
            <p>Phone: 081 375 9675</p>
            <p>Address: 57 Bosbok Ln Nigel Gauteng</p>
        </div>

       <!-- Location on a map -->
       <div class="map">
            <img src="images\map.png" alt="Our Location">
        </div>
    </div>

    <!-- Navigation buttons -->
    <div class="nav-buttons">
        <button onclick="location.href='Homepage.php'">
            <img src="images\homepage.jpg" alt="Home" class="nav-icon">Homepage
        </button>
        <button onclick="location.href='Services.php'">
            <img src="images\services.jpg" alt="Services" class="nav-icon">Services
        </button>
        <button onclick="location.href='Bookings.php'">
            <img src="images\bookings.jpg" alt="Bookings" class="nav-icon">Bookings
        </button>
        <button onclick="location.href='Products.php'">
            <img src="images\products.jpg" alt="Products" class="nav-icon">Products
        </button>
        <button onclick="location.href='AboutUs.php'">
            <img src="images\aboutus.jpg" alt="About Us" class="nav-icon">About Us
        </button>
        <button onclick="location.href='Reviews.php'">
            <img src="images\reviews.jpg" alt="Reviews" class="nav-icon">Reviews
        </button>
    </div>

    <script src="cart.js"></script>
</body>
</html>

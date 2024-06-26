<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Braided by Jay</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <!-- Header section with logo, search bar, and icons -->
    <header>
        <div class="logo">
            <a href="Homepage.php"><img src="images/logo.jpg" alt="Braided by Jay Logo"></a>
        </div>
        <div class="search-bar">
            <form action="search_results.php" method="GET">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="icons">
    
            <a href="cart.php"><img src="images/cart.jpg" alt="Cart"></a>
            <a href="Logout.php"><img src="images/logout.jpg" alt="Logout"></a>
            <a href="contact.php"><img src="images/phone icon.png" alt="Phone"></a>
        </div>
    </header>

    <!-- Main content section with poster, profile, and book appointment button -->
    <div class="main-content">
        <div class="poster-container">
            <img src="images/Poster.jpg" alt="Braided by Jay Poster" class="poster-image">
        </div>
        <div class="profile-section">
            <a href="profile.php">
                <img src="images/profile.jpg" alt="Profile Picture" class="profile-image">
                <p>Welcome, Queen!!</p>
            </a>
            <button type="button" class="book-appointment-button" onclick="location.href='Bookings.php'">Book an Appointment</button>
        </div>
    </div>

    <!-- Reviews section -->
    <div class="reviews-section">
        <h2>Customer Reviews</h2>
        <ul class="review-list">
            <li>
                <h3>Short Straight Back with Beads</h3>
                <img src="images/shortstraightback.jpg" alt="Short Straight Back with Beads">
                <p>Beautiful style with added beads at the ends. Very Creative!! - Jane Doe</p>
            </li>
            <li>
                <h3>Fulani Braids</h3>
                <img src="images/straightfulani.jpg" alt="Fulani Braids">
                <p>Amazing Fulani braids. Loved it! - Sarah Smith</p>
            </li>
            <li>
                <h3>Knotless Braids</h3>
                <img src="images/knotlessmedium.jpg" alt="Knotless Braids">
                <p>Perfect knotless braids, very light and comfortable. - Emily Johnson</p>
            </li>

            
        </ul>
    </div>

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
</body>
</html>

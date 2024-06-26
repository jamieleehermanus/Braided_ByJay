<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Braided by Jay</title>
    <link rel="stylesheet" href="main.css">
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
            <a href="favorites.php"><img src="images/favorites icon.jpg" alt="Favorites"></a>
            <a href="cart.php"><img src="images/cart.jpg" alt="Cart"></a>
            <a href="contact.php"><img src="images/phone icon.png" alt="Phone"></a>
            <a href="Logout.php"><img src="images/logout.jpg" alt="Logout"></a>
        </div>
    </header>

    <!-- Profile Content -->
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-picture">
                <img src="images/profile.jpg" alt="User Profile Picture">
            </div>
            <div class="profile-info">
                <h1>Kayla</h1>
                <p>Email: kaylasmith@gmail.com</p>
                <button class="edit-button">Edit Profile</button>
            </div>
        </div>
        <div class="profile-details">
            <h2>Profile Details</h2>
            <div class="details-grid">
                <div class="detail-item">
                    <h3>Username</h3>
                    <p>Kayla</p>
                </div>
                <div class="detail-item">
                    <h3>Email</h3>
                    <p>kaylasmith@gmail.com</p>
                </div>
                <div class="detail-item">
                    <h3>Phone</h3>
                    <p>076 360 3344</p>
                </div>
                <div class="detail-item">
                    <h3>Address</h3>
                    <p>123 Main St, Springfield, SA</p>
                </div>
                <!-- Add more profile details as needed -->
            </div>
        </div>
        <!-- Appointment History Section -->
        <div class="appointment-history">
            <h2>Appointment History</h2>
            <div class="appointment-list">
                <div class="appointment-item">
                    <h3>Appointment 1</h3>
                    <p>Date: June 1, 2024</p>
                    <p>Service: Bantu Knots</p>
                </div>
                <div class="appointment-item">
                    <h3>Appointment 2</h3>
                    <p>Date: June 15, 2024</p>
                    <p>Service: Box Braids</p>
                </div>
                <!-- Add more appointments as needed -->
            </div>
        </div>
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


            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Braided by Jay</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    <style>
        /* Additional CSS styles for the contact page */
        .main-content {
            font-size: 30px;
        }

        .social-media {
            font-size: 20px;
        }

        .social-media ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .social-media ul li {
            display: inline-block;
            margin-right: 10px;
        }

        .social-media ul li a img {
            width: 50px;
            height: 50px;
        }

        .social-media ul li:last-child {
            margin-right: 0;
        }
    </style>
</head>
<body>
    <!-- Header section with logo, search bar, and icons -->
    <header>
        <div class="logo">
            <a href="Homepage.php"><img src="images\logo.jpg" alt="Braided by Jay Logo"></a>
        </div>
        
            </form>
            <div class="icons">
            
            <a href="Logout.php"><img src="images\logout.jpg" alt="Logout"></a>
            
        </div>
    </header>

    <!-- Main content section -->
    <div class="main-content">
        <h2>Contact Us</h2>
        <p>You can contact us through the following channels:</p>
        <ul>
            <li>Email: info@braidedbyjay.com</li>
            <li>Phone: 081 375 9675</li>
            <li>Instagram: <a href="https://www.instagram.com/braidedbyjay" target="_blank">@braidedbyjay</a></li>
            <li>Facebook: <a href="https://www.facebook.com/braidedbyjay" target="_blank">Braided by Jay</a></li>
            <!-- Add more contact channels as needed -->
        </ul>
    </div>

    <!-- Social media links -->
    <div class="social-media">
        <h3>Follow Us</h3>
        <ul>
            <li><a href="https://www.instagram.com/braidedbyjay" target="_blank"><img src="images\ig.jpg" alt="Instagram"></a></li>
            <li><a href="https://www.facebook.com/braidedbyjay" target="_blank"><img src="images\fb.jpg" alt="Facebook"></a></li>
            <!-- Add more social media links as needed -->
        </ul>
    </div>

    <!-<!-- Navigation buttons -->
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
</body>
</html>

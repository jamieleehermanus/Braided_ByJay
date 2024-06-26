<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - Braided by Jay</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
        /* Additional CSS styles for the logout page */
        .main-content {
            text-align: center;
            margin-top: 100px;
        }

        .logout-button {
            background-color: #A8CBBD;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #A0522D;
        }

        .nav-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .nav-buttons button {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #A8CBBD;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
        }

        .nav-buttons .nav-icon {
            width: 30px;
            height: 30px;
            margin-bottom: 5px;
        }

        .nav-buttons button:hover {
            background-color: #A0522D;
        }
    </style>
</head>
<body>
    <!-- Container for the entire page content -->
    <div class="login-container">
        <!-- Header section with logo, search bar, and icons -->
        <header>
            <div class="logo">
                <a href="Homepage.php"><img src="images/logo.jpg" alt="Braided by Jay Logo"></a>
            
        </header>

        <!-- Main content section -->
        <section class="login-section">
            <div class="main-content">
                <h2>Logout</h2>
                <p>Are you sure you want to logout?</p>
                <button class="logout-button" onclick="location.href='logoutprocess.php'">Logout</button>
            </div>
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

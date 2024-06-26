<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Braided by Jay</title>
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
           
            <a href="cart.php">
                <img src="images/cart.jpg" alt="Cart">
                <span id="cart-count"></span> <!-- Cart count displayed here -->
            </a>
            <a href="contact.php"><img src="images/phone icon.png" alt="Phone"></a>
            <a href="Logout.php"><img src="images/logout.jpg" alt="Logout"></a>
        </div>
    </header>

    <!-- Main content section with products showcase -->
    <div class="main-content">
        <h2>Our Products</h2>
        <div class="products-showcase">
            <div class="product" data-id="1" data-name="Isoplus Hairline & Edge Hold Gel 225g" data-price="40.00">
                <img src="images/edgecontrol.jpeg" alt="Isoplus Hairline & Edge Hold Gel 225g">
                <h3>Isoplus Hairline & Edge Hold Gel 225g</h3>
                <p>R40.00</p>
                <p>Isoplus Hairline & Edge Holding Gel helps keep hair around your hairline in place for that baby hair look. 
                    Its nourishing formula helps to limit hair breakage and holds hair in place without flaking.</p>
                <div class="stars">
                    ★★★★☆
                </div>
                <button onclick="addToCart(1)">Add to Cart</button>
                <button onclick="deleteFromCart(1)">Remove from Cart</button>
            </div>
            <div class="product" data-id="2" data-name="Isoplus Oil Sheen Aerosol 275ml" data-price="45.00">
                <img src="images/oilsheen.webp" alt="Isoplus Oil Sheen Aerosol 275ml">
                <h3>Isoplus Oil Sheen Aerosol 275ml</h3>
                <p>Price: R45.00</p>
                <p>Contains proteins to help strengthen weak and damaged hair. Lanolin is included in this formulation to impart sheen, body and volume.
                     Iodine to help heal damaged scalp and Vitamins to aid in faster hair growth. Excellent for all hair types, blow dry 2</p>
                <div class="stars">
                    ★★★★★
                </div>
                <button onclick="addToCart(2)">Add to Cart</button>
                <button onclick="deleteFromCart(2)">Remove from Cart</button>
            </div>
            <div class="product" data-id="3" data-name="ORS Olive Oil Wrap/Set Mousse 207ml" data-price="30.00">
                <img src="images/mousse.jpeg" alt="ORS Olive Oil Wrap/Set Mousse 207ml">
                <h3>ORS Olive Oil Wrap/Set Mousse 207ml</h3>
                <p>R30.00</p>
                <p>ORS Olive Oil Hair Styling Mousse 270ml is perfect for wrapping or setting your hair and giving it great hold and volume. 
                    Added Olive oil replenishes your hair and leaves it stronger and healthier-looking.</p>
                <div class="stars">
                    ★★★★☆
                </div>
                <button onclick="addToCart(3)">Add to Cart</button>
                <button onclick="deleteFromCart(3)">Remove from Cart</button>
            </div>
        </div>
        <!-- Checkout button -->
        <div class="checkout-button">
            <button onclick="location.href='checkout.php'">Proceed to Checkout</button>
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

    <!-- JavaScript file for cart functionality -->
    <script src="cart.js"></script>
</body>
</html>

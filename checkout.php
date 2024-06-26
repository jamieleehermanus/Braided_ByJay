<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Braided by Jay</title>
    <link rel="stylesheet" type="text/css" href="checkout.css">
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

    <!-- Main content section with checkout details -->
    <div class="main-content">
        <h2>Checkout</h2>
        <div class="checkout-items">
            <?php if (empty($cart_items)): ?>
                <p>Your cart is empty.</p>
            <?php else: ?>
                <?php foreach ($cart_items as $item): ?>
                    <?php
                    $product_id = $item['product_id'];
                    $quantity = $item['quantity'];
                    $product = $products[$product_id];
                    ?>
                    <div class="checkout-item">
                        <h3><?php echo $product['name']; ?></h3>
                        <p>Price: R<?php echo number_format($product['price'], 2); ?></p>
                        <p>Quantity: <?php echo $quantity; ?></p>
                        <a href="<?php echo $product['paypal_link']; ?>" target="_blank">
                            <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" alt="PayPal Checkout">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
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

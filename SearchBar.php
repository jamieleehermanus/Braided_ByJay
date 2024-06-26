<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get search query
$searchQuery = $_GET['query'];

// Search the database
$sql = "SELECT * FROM products WHERE name LIKE '%$searchQuery%' OR description LIKE '%$searchQuery%'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - Braided by Jay</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
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
        <a href="favorites.php"><img src="images\favorites icon.jpg" alt="Favorites"></a>
            <a href="cart.php"><img src="images\cart.jpg" alt="Cart"></a>
            <a href="contact.php"><img src="images\phone icon.png" alt="Phone"></a>
           
        </div>
    </header>

    <div class="main-content">
        <h2>Search Results for "<?php echo $searchQuery; ?>"</h2>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<h3>" . $row['name'] . "</h3>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<p>Price: $" . $row['price'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No results found.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>

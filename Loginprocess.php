<?php
session_start();
require_once 'Config.php'; // Include database connection settings

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the email and password from the form
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Validate the inputs
    if (!empty($email) && !empty($password)) {
        // Prepare the SQL statement to prevent SQL injection
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $email);

            // Execute the statement
            if ($stmt->execute()) {
                // Store result to check if the user exists
                $stmt->store_result();
                
                if ($stmt->num_rows == 1) {
                    // Bind result variables
                    $stmt->bind_result($id, $email, $hashed_password);
                    if ($stmt->fetch()) {
                        // Verify the password
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, start a new session
                            $_SESSION['loggedin'] = true;
                            $_SESSION['id'] = $id;
                            $_SESSION['email'] = $email;

                            // Redirect to the welcome page
                            header("location: Homepage.php");
                            exit;
                        } else {
                            // Display an error message if the password is not valid
                            $login_err = "Invalid password.";
                        }
                    }
                } else {
                    // Display an error message if the email doesn't exist
                    $login_err = "No account found with that email.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close the statement
            $stmt->close();
        }
    } else {
        $login_err = "Please enter email and password.";
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Braided by Jay</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Container for the entire page content -->
    <div class="login-container">
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
                <a href="favorites.php"><img src="images/favorites icon.jpg" alt="Favorites"></a>
                <a href="cart.php"><img src="images/cart.jpg" alt="Cart"></a>
                <a href="Profile.php"><img src="images/profile.jpg" alt="Profile"></a>
            </div>
        </header>

        <!-- Login section -->
        <section class="login-section">
            <h2>Login</h2>
            <!-- Display any login errors -->
            <?php 
            if (!empty($login_err)) {
                echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }        
            ?>
            <!-- Login form -->
            <form action="Loginprocess.php" method="POST">
                <!-- Email input field -->
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <!-- Password input field -->
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <!-- Submit button for logging in -->
                <button type="submit">Login</button>
            </form>
            <!-- Link to registration page for new users -->
            <p>Don't have an account? <a href="Register.php">Register here</a></p>
        </section>
    </div>
</body>
</html>
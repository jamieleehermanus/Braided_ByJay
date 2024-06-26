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
            
        </header>

        <!-- Login section -->
        <section class="login-section">
            <h2>Login</h2>
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
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </section>
    </div>
</body>
</html>
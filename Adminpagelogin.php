<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Dashboard</title>
    <link rel="stylesheet" href="Adminpagelogin.css">
</head>
<body>
    <!-- Header section with logo -->
    <header>
        <div class="logo">
            <a href="Homepage.php"><img src="images/logo.jpg" alt="Logo"></a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="admin-login-section">
            <h1>Admin Login</h1>
            <form action="admin_login_action.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </main>

    
</body>
</html>

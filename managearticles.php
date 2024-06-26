<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Articles - Admin Dashboard</title>
    <link rel="stylesheet" href="manage_articles.css">
    <link rel="stylesheet" href="managearticles.css"> 
    <!-- Include any additional scripts or stylesheets as needed -->
</head>
<body>
    <!-- Header section with logo, search bar, and icons -->
    <header>
        <div class="logo">
            <a href="Homepage.php"><img src="images/logo.jpg" alt="Braided by Jay Logo"></a>
        </div>
        <!-- Add any additional header content or navigation -->
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="admin-dashboard">
            <h1>Manage Articles</h1>
            <div class="admin-sections">
                <!-- Article Management Section -->
                <div class="admin-section">
                    <h2>Article List</h2>
                    <div class="article-list">
                        <!-- Example article cards (Replace with dynamic data) -->
                        <div class="article-card">
                            <h3>Article Title</h3>
                            <p>Author: Jamie-lee</p>
                            <p>Date: June 19, 2024</p>
                            <button class="edit-button">Edit</button>
                            <button class="delete-button">Delete</button>
                        </div>
                        <!-- Repeat for more articles -->
                    </div>
                </div>

                <!-- Add New Article Section -->
                <div class="admin-section">
                    <h2>Add New Article</h2>
                    <form action="add_article.php" method="POST">
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" required>
                        <label for="author">Author:</label>
                        <input type="text" id="author" name="author" required>
                        <label for="content">Content:</label>
                        <textarea id="content" name="content" rows="8" required></textarea>
                        <button type="submit">Add Article</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer and Navigation Buttons -->
    <footer>
        <div class="nav-buttons">
            <button onclick="location.href='AdminPage.php'">
                <img src="images\admin.jpg" alt="AdminPage" class="nav-icon">Admin 
            </button>
            <!-- Add more navigation buttons as needed -->
        </div>
    </footer>

    <!-- Include any additional scripts at the end of the body -->
</body>
</html>

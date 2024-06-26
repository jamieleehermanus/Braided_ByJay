<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - Braided by Jay</title>
    <link rel="stylesheet" href="AdminPage.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .admin-table button {
            margin: 2px;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .admin-table button.edit {
            background-color: rgba(75, 192, 192, 1);
            color: white;
        }
        .admin-table button.delete {
            background-color: rgba(255, 99, 132, 1);
            color: white;
        }
        .chart-container {
            width: 800px;
            height: 600px;
        }
        .admin-section-button {
            margin: 10px 0;
            padding: 10px 20px;
            background-color: rgba(75, 192, 192, 1);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            display: block;
            width: fit-content;
        }
    </style>
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
           
            <a href="Logout.php"><img src="images/logout.jpg" alt="Logout"></a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="admin-dashboard">
            <h1>Admin Dashboard</h1>
            <div class="admin-sections">
                <!-- User Management Section -->
                <div class="admin-section">
                    <h2>User Management</h2>
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example User Row -->
                            <tr>
                                <td>Kayla</td>
                                <td>kaylasmith@gmail.com</td>
                                <td>User</td>
                                <td>
                                    <button class="edit">Edit</button>
                                    <button class="delete">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashley</td>
                                <td>ashleywilliams@gmail.com</td>
                                <td>User</td>
                                <td>
                                    <button class="edit">Edit</button>
                                    <button class="delete">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Mia</td>
                                <td>mialeeh@gmail.com</td>
                                <td>User</td>
                                <td>
                                    <button class="edit">Edit</button>
                                    <button class="delete">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Liam</td>
                                <td>liamjamswebsh@gmail.com</td>
                                <td>Admin</td>
                                <td>
                                    <button class="edit">Edit</button>
                                    <button class="delete">Delete</button>
                                </td>
                            </tr>
                            <!-- Add more user rows dynamically -->
                        </tbody>
                    </table>
                    <button class="add-user-button">Add New User</button>
                </div>

                

                <!-- Bookings Management Section -->
                <div class="admin-section">
                    <h2>Bookings Management</h2>
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Customer Name</th>
                                <th>Service</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Booking Row -->
                            <tr>
                                <td>12345</td>
                                <td>Kayla</td>
                                <td>Box Braids</td>
                                <td>2024-06-20</td>
                                <td>Confirmed</td>
                                <td>
                                    <button class="edit">Edit</button>
                                    <button class="delete">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>67891</td>
                                <td>Ashley</td>
                                <td>Fulani Braids</td>
                                <td>2024-06-20</td>
                                <td>Confirmed</td>
                                <td>
                                    <button class="edit">Edit</button>
                                    <button class="delete">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>101112</td>
                                <td>Mia</td>
                                <td>Short Straight Back</td>
                                <td>2024-06-20</td>
                                <td>Confirmed</td>
                                <td>
                                    <button class="edit">Edit</button>
                                    <button class="delete">Delete</button>
                                </td>
                            </tr>
                            <!-- Add more booking rows dynamically -->
                        </tbody>
                    </table>
                    <button class="view-appointments-button">View Appointments</button>
                </div>

                <!-- Manage Products Section -->
                <div class="admin-section">
                    <h2>Manage Products</h2>
                    <button class="admin-section-button" onclick="location.href='manageproducts.php'">Go to Manage Products</button>
                </div>

                <!-- Manage Articles Section -->
                <div class="admin-section">
                    <h2>Manage Articles</h2>
                    <button class="admin-section-button" onclick="location.href='managearticles.php'">Go to Manage Articles</button>
                </div>

                <!-- Sales Section -->
                <div class="admin-section">
                    <h2>Sales</h2>
                    <div class="chart-container">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>

                <!-- Reviews Section -->
                <div class="admin-section">
                    <h2>Reviews Analysis</h2>
                    <div class="chart-container">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>

                <!-- Website Statistics Section -->
                <div class="admin-section">
                    <h2>Website Statistics</h2>
                    <div class="stats">
                        <div class="stat">
                            <h3>Total Users</h3>
                            <p>50</p>
                        </div>
                        <div class="stat">
                            <h3>Total Orders</h3>
                            <p>35</p>
                        </div>
                        <div class="stat">
                            <h3>Total Revenue</h></p>R5,500</p>
                        </div>
                        <div class="stat">
                            <h3>Page Views</h3>
                            <p>100</p>
                        </div>
                    </div>
                </div>

                <!-- Payment Section -->
                <div class="admin-section">
                    <h2>Payment Details</h2>
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Customer Name</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Payment Row -->
                            <tr>
                                <td>TXN12345</td>
                                <td>Kayla</td>
                                <td>R40</td>
                                <td>PayPal</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>TXN67891</td>
                                <td>Ashley</td>
                                <td>R45</td>
                                <td>Credit Card</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>TXN101112</td>
                                <td>Mia</td>
                                <td>R30</td>
                                <td>PayPal</td>
                                <td>Completed</td>
                            </tr>
                            <!-- Add more payment rows dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Braided by Jay</p>
    </footer>

    <script>
        // Bar Chart for Sales
        const barCtx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Sales',
                    data: [10, 15, 5, 20, 25, 30],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Pie Chart for Reviews
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Good Reviews', 'Bad Reviews'],
                datasets: [{
                    label: 'Reviews',
                    data: [80, 20],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
            }
        });

        // Ensure all buttons work
        document.querySelectorAll('.edit').forEach(button => {
            button.addEventListener('click', () => {
                alert('Edit button clicked');
            });
        });

        document.querySelectorAll('.delete').forEach(button => {
            button.addEventListener('click', () => {
                alert('Delete button clicked');
            });
        });

        document.querySelector('.add-user-button').addEventListener('click', () => {
            alert('Add New User button clicked');
        });

        document.querySelector('.add-product-button').addEventListener('click', () => {
            alert('Add New Product button clicked');
        });

        document.querySelector('.view-appointments-button').addEventListener('click', () => {
            alert('View Appointments button clicked');
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment - Braided by Jay</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
</head>
<body>
    <!-- Header section with logo, search bar, and icons -->
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
        <a href="contact.php"><img src="images/phone icon.png" alt="Phone"></a>
            <a href="cart.php"><img src="images\cart.jpg" alt="Cart"></a>
            <a href="Logout.php"><img src="images\logout.jpg" alt="Logout"></a>
            <a href="profile.php"><img src="images\profile.jpg" alt="Profile"></a>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="main-content">
            <h2>Book an Appointment</h2>
            <div id="calendar"></div>
            <form id="booking-form">
                <label for="style">Choose Style:</label>
                <select id="style" name="style" required>
                    <option value="">Select Style</option>
                    <option value="Fulani Braids">Fulani Braids</option>
                    <option value="Knotless Braids">Knotless Braids</option>
                    <option value="Alicia Keys Braids">Alica Keys Braids</option>
                    <option value="Box Braids">Box Braids</option>
                    <option value="Touch-up Services">Touch-up Services</option>
                    <option value="Take-down Services">Take-down Services</option>
                    <option value="Cornrows">Cornrows</option>
                    <option value="Custom">Custom</option>
                </select>

                <label for="duration">Estimated Duration (hours):</label>
                <input type="number" id="duration" name="duration" required min="1">

                <label for="appointment-date">Appointment Date:</label>
                <input type="text" id="appointment-date" name="appointment-date" readonly required>

                <button type="submit" class="book-appointment-button">Confirm Appointment</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; Braided by Jay.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                    $('#appointment-date').val(moment(start).format('YYYY-MM-DD'));
                    $('#calendar').fullCalendar('unselect');
                }
            });

            $('#booking-form').on('submit', function(e) {
                e.preventDefault();
                alert('Appointment Confirmed: ' + 
                      '\nStyle: ' + $('#style').val() + 
                      '\nDuration: ' + $('#duration').val() + ' hours' +
                      '\nDate: ' + $('#appointment-date').val());
            });
        });
    </script>
</body>
</html>

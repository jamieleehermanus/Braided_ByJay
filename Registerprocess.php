<?php
include 'Config.php';

//tabase connection
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "braided_by_jay";

//$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm-password'];

// Check if password and confirm password match
if ($password !== $confirmPassword) {
    echo "Passwords do not match.";
    exit;
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// Insert data into database
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
    // Redirect to homepage after successful registration
    header("Location: Homepage.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
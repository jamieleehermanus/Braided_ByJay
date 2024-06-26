<?php
session_start();
include 'adminconfig.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        header("Location: adminloginprocess.php?error=Please enter username and password");
        exit();
    }

    // Prepare SQL query to fetch user data
    $sql = "SELECT id, username, password FROM admins WHERE username = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $param_username);
        $param_username = $username;

        if ($stmt->execute()) {
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                $stmt->bind_result($id, $username, $hashed_password);
                if ($stmt->fetch()) {
                    if (password_verify($password, $hashed_password)) {
                        // Password is correct, start a new session
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;

                        header("Location: admin_dashboard.php");
                        exit();
                    } else {
                        // Display an error message if password is not valid
                        header("Location: adminloginprocess.php?error=Invalid username or password");
                        exit();
                    }
                }
            } else {
                // Display an error message if username doesn't exist
                header("Location: adminloginprocess.php?error=Invalid username or password");
                exit();
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

        $stmt->close();
    }

    $conn->close();
}
?>

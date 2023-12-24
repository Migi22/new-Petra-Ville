<?php
// Include your database connection code here
include '../config/database.php';

session_start();

// Check if the user is already logged in
if(isset($_SESSION['admin_id'])){
    header("Location: admin_dashboard.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check credentials
    $sql = "SELECT * FROM admin_users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_id'] = $row['admin_id'];
            header("Location: admin_dashboard.php");
            exit();
        } else {
            $error_message = "Invalid password.".$password."and".$row['password'];
        }
    } else {
        $error_message = "Invalid username.";
    }
}


// Close the database connection
$conn->close();
?>
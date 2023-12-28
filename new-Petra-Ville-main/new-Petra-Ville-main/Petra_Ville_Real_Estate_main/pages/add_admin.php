
<?php
include '../config/database.php';

session_start();
include '../functions/check_if_logged_in_admin.php';

$successMessage = '';
$errorMessage = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);

    // Check if the username already exists
    $checkUsernameQuery = "SELECT * FROM admin_users WHERE username = '$username'";
    $checkResult = $conn->query($checkUsernameQuery);

    if ($checkResult->num_rows > 0) {
        $errorMessage = "Username already exists. Choose a different username.";
    } else {
        // Insert new user admin
        $sql = "INSERT INTO admin_users (fname, lname, username, password) VALUES ('$fname', '$lname', '$username', '$password')";

        if ($conn->query($sql)) {
            $successMessage = "User admin added successfully!";
        } else {
            $errorMessage = "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Admin</title>
</head>
<body>
    <div id="goback"><a href="./admin_dashboard.php"><button>Go Back</button></a></div>
    <h1>Add User Admin</h1>

    <?php
    // Display success or error message
    if (!empty($successMessage)) {
        echo "<div style='color: green;'>$successMessage</div>";
    } elseif (!empty($errorMessage)) {
        echo "<div style='color: red;'>$errorMessage</div>";
    }
    ?>

    <form method="post" action="">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" required>

        <label for="lname">Last Name:</label>
        <input type="text" name="lname" required>

        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Add User</button>
    </form>
</body>
</html>

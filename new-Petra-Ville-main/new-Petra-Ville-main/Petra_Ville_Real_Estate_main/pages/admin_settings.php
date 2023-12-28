<?php
// database connection 
include '../config/database.php';

session_start();
include '../functions/check_if_logged_in_admin.php';

// Fetch admin information
$admin_id = $_SESSION['admin_id'];
$sql = "SELECT * FROM admin_users WHERE admin_id = $admin_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $admin_info = $result->fetch_assoc();

    // Check if the logged-in admin is "superadmin"
    if ($admin_info['username'] !== 'superadmin') {
        // Display an error message and exit
        $errorMessage = "Access Denied. Only superadmin can access this page.";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings</title>
    <link rel="stylesheet" href="../css/admin_dashboard.css">
    <link rel="stylesheet" href="../css/admin_settings.css">
    
</head>
<body>
    <header>
        <div id="goback">
            <a href="./admin_dashboard.php"><button>Go Back</button></a>
        </div>
    </header>
    
    <div class="settings-container">
        <?php
        // Display error message if applicable
        if (isset($errorMessage)) {
            echo "<div class='error-message'>$errorMessage</div>";
        } else {
        ?>
            <h2>Admin Settings</h2>
            <button class="settings-button" onclick="location.href='admin_users.php'">View Admins</button>
            <button class="settings-button" onclick="location.href='add_admin.php'">Add Admin</button>
            <button class="settings-button" onclick="location.href='edit_admin.php'">Edit Admin</button>
            <button class="settings-button" onclick="location.href='delete_admin.php'">Delete Admin</button>
            
        <?php
        }
        ?>
    </div>
</body>
</html>

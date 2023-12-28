<?php
include '../config/database.php';

session_start();

include '../functions/check_if_logged_in_admin.php';

// Fetch admin information
$admin_id = $_SESSION['admin_id'];
$sql = "SELECT * FROM admin_users WHERE admin_id = $admin_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $admin_info = $result->fetch_assoc();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin_dashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome, <?php echo $admin_info['username']; ?></h1>
        <div class="figure-container">
        <img src="../assets/images/icon_admin.jpg" alt="icon_admin.jpg">
            <a href="./admin_side_inquiries.php">
                <p>View Inquiries</p>
            </a>
            <a href="./admin_settings.php">
                <p>Settings</p>
            </a>
        </div>
        <a href="../functions/admin_logout.php">Logout</a>
    </div>
</body>
</html>

<?php
// Include your database connection code here
include '../config/database.php';

session_start();

// Check if the user is not logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

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
            <a href="../pages/admin_side_inquiries.php">
                <img src="../assets/images/icon_admin.jpg" alt="icon_admin.jpg">
                <p>View Inquiries</p>
            </a>
        </div>
        <a href="../functions/admin_portal.php">Logout</a>
    </div>
</body>
</html>

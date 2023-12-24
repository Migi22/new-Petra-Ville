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

// Check if the form is submitted for editing admin
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_admin'])) {
    // Handle editing admin details
    $selectedAdminId = $_POST['selected_admin'];
    $editedFname = mysqli_real_escape_string($conn, $_POST['edited_fname']);
    $editedLname = mysqli_real_escape_string($conn, $_POST['edited_lname']);
    $editedUsername = mysqli_real_escape_string($conn, $_POST['edited_username']);
    $editedPassword = password_hash(mysqli_real_escape_string($conn, $_POST['edited_password']), PASSWORD_DEFAULT);

    $editAdminQuery = "UPDATE admin_users SET fname = '$editedFname', lname = '$editedLname', username = '$editedUsername', password = '$editedPassword' WHERE admin_id = $selectedAdminId";
    $conn->query($editAdminQuery);

    // Refresh admin information after editing
    $result = $conn->query($sql);
    $admin_info = $result->fetch_assoc();
}

// Fetch all admins for the dropdown list
$adminsQuery = "SELECT * FROM admin_users";
$adminsResult = $conn->query($adminsQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin</title>
    <link rel="stylesheet" href="../css/admin_dashboard.css">
    <link rel="stylesheet" href="../css/edit_delete.css">
</head>
<body>
    <header>
        <div id="goback">
            <a href="./admin_settings.php"><button>Go Back</button></a>
        </div>
    </header>
    
    <div class="admin-details-container">
        <h2>Admin Details</h2>
        <p>Username: <?php echo $admin_info['username']; ?></p>

        <!-- Dropdown menu for selecting admin to edit -->
        <form method="post" action="" class="edit-form">
            <label for="selected_admin">Select Admin to Edit:</label>
            <select id="selectedAdmin" name="selected_admin">
                <?php while ($admin = $adminsResult->fetch_assoc()) : ?>
                    <option value="<?php echo $admin['admin_id']; ?>"><?php echo $admin['username']; ?></option>
                <?php endwhile; ?>
            </select>

            <label for="edited_fname">Edit First Name:</label>
            <input type="text" name="edited_fname" required>

            <label for="edited_lname">Edit Last Name:</label>
            <input type="text" name="edited_lname" required>

            <label for="edited_username">Edit Username:</label>
            <input type="text" name="edited_username" required>

            <label for="edited_password">Edit Password:</label>
            <input type="password" name="edited_password" required>

            <button type="submit" name="edit_admin">Edit Admin</button>
        </form>
    </div>
</body>
</html>

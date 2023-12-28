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

// Check if the form is submitted for deleting admin
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_admin'])) {
    $selectedAdmin = mysqli_real_escape_string($conn, $_POST['selected_admin']);

    if (empty($selectedAdmin)) {
        $deleteErrorMessage = 'Please select an admin to delete.';
    } else {
        // Delete the selected admin from the database
        $deleteAdminQuery = "DELETE FROM admin_users WHERE admin_id = $selectedAdmin";
        $conn->query($deleteAdminQuery);

        $deleteConfirmationMessage = 'Admin deleted successfully.';
    }
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
    <title>Delete Admin</title>
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

        <!-- Dropdown menu for selecting admin to delete -->
        <form method="post" action="" class="delete-form">
            <label for="selected_admin">Select Admin to Delete:</label>
            <select id="selectedAdmin" name="selected_admin">
                <?php while ($admin = $adminsResult->fetch_assoc()) : ?>
                    <option value="<?php echo $admin['admin_id']; ?>"><?php echo $admin['username']; ?></option>
                <?php endwhile; ?>
            </select>

            <!-- Display the delete status message -->
            <?php
            if (isset($deleteConfirmationMessage)) {
                echo '<div style="color: green;">' . $deleteConfirmationMessage . '</div>';
            } elseif (isset($deleteErrorMessage)) {
                echo '<div style="color: red;">' . $deleteErrorMessage . '</div>';
            }
            ?>
            <button class="delete-button" type="submit" name="delete_admin">Delete Admin</button>
        </form>
    </div>
</body>
</html>

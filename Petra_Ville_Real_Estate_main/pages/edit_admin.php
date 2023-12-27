<?php
include '../config/database.php';
session_start();
include '../functions/check_if_logged_in_admin.php';
include '../functions/admin_edit.php';
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
        <?php
        if (isset($_SESSION['error_message'])) {
            echo '<div style="color: red;">' . $_SESSION['error_message'] . '</div>';
            // Clear the error message to avoid displaying it on subsequent page loads
            unset($_SESSION['error_message']);
        } else if (isset($_SESSION['success_message'])) {
            echo '<div style="color: green;">' . $_SESSION['success_message'] . '</div>';
            // Clear the success message to avoid displaying it on subsequent page loads
            unset($_SESSION['success_message']);
        }
        ?>
    </div>
</body>
</html>

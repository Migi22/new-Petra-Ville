<?php
include '../config/database.php';

session_start();
include '../functions/check_if_logged_in_admin.php';

include '../functions/admin_delete.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Admin</title>
    <link rel="stylesheet" href="../css/admin_dashboard.css">
    <link rel="stylesheet" href="../css/admin_edit_delete.css">
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

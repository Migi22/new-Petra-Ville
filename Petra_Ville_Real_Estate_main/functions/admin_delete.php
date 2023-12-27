<?php
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
        // Check if the selected admin is allowed to be deleted
        if ($selectedAdmin != 1) { // check if the selected admin is superadmin or not
            // Delete the selected admin from the database
            $deleteAdminQuery = "DELETE FROM admin_users WHERE admin_id = $selectedAdmin";
            $conn->query($deleteAdminQuery);

            $deleteConfirmationMessage = 'Admin deleted successfully.';
        } else {
            $deleteErrorMessage = 'You cannot delete the superadmin.';
        }
    }
}

// Fetch all admins for the dropdown list
$adminsQuery = "SELECT * FROM admin_users";
$adminsResult = $conn->query($adminsQuery);
?>

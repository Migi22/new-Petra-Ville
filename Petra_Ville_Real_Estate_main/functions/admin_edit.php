<?php
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

    // Check if the admin being edited is not the superadmin
    if ($selectedAdminId != $admin_id) {
        $editAdminQuery = "UPDATE admin_users SET fname = '$editedFname', lname = '$editedLname', username = '$editedUsername', password = '$editedPassword' WHERE admin_id = $selectedAdminId";
        //$conn->query($editAdminQuery);
        if ($conn->query($editAdminQuery)) {
            // Success
            $_SESSION['success_message'] = 'Admin successfully edited';
        } else {
            // Error
            $_SESSION['error_message'] = 'Error editing admin: ' . $conn->error;
        }
    } else {
        // If the admin being edited is the superadmin, update other details but not the username
        $editAdminQuery = "UPDATE admin_users SET fname = '$editedFname', lname = '$editedLname', password = '$editedPassword' WHERE admin_id = $selectedAdminId";
        //$conn->query($editAdminQuery);
        if ($conn->query($editAdminQuery)) {
            // Success
            $_SESSION['success_message'] = 'Admin successfully edited';
        } else {
            // Error
            $_SESSION['error_message'] = 'Error editing admin: ' . $conn->error;
        }
    }

    // Refresh admin information after editing
    $result = $conn->query($sql);
    $admin_info = $result->fetch_assoc();
}


// Fetch all admins for the dropdown list
$adminsQuery = "SELECT * FROM admin_users";
$adminsResult = $conn->query($adminsQuery);
?>
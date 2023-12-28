
<?php

include '../config/database.php';

session_start();
include '../functions/check_if_logged_in_admin.php';

// Fetch user admins
$sql = "SELECT * FROM admin_users";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admins</title>
    <link rel="stylesheet" href="../css/admin_inquiry.css">
</head>
<body>

    <div id="goback"><a href = "./admin_settings.php"><button>Go Back</button></a></div>

    
    <h1>User Admins</h1>
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Admin ID</th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Password (hased)</th>
                    
                </tr>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['admin_id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['fname']}</td>
                    <td>{$row['lname']}</td>
                    <td>{$row['password']}</td>
                    <!-- Add more cells as needed -->
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No user admins found.";
    }
    ?>
</body>
</html>

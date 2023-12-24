<?php include '../functions/admin_side_inquiries_data_query.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Inquiries</title>
    <link rel="stylesheet" href="../css/admin_inquiry.css">
    <script src = "../script/goBack.js"></script>
</head>
<body>
    <button onclick="goBack()">Back</button>
    <h1>Inquiries</h1>

    <?php
    // Check if there are any inquiries
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Inquiry ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Province</th>
                    <th>Property Name</th>
                    <th>Inquiry Type</th>
                    <th>Unit Type</th>
                    <th>TCP Range</th>
                    <th>Product Interest</th>
                    <th>Message</th>
                    <th>Submission Time</th>
                </tr>";

        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['inquiry_id']}</td>
                    <td>{$row['first_name']}</td>
                    <td>{$row['last_name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['province']}</td>
                    <td>{$row['property_name']}</td>
                    <td>{$row['inquiry_type']}</td>
                    <td>{$row['unit_type']}</td>
                    <td>{$row['tcp_range']}</td>
                    <td>{$row['product_interest']}</td>
                    <td>{$row['message']}</td>
                    <td>{$row['submission_time']}</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No inquiries found.";
    }
    ?>

</body>
</html>

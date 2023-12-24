<?php
// Include your database connection code here
include '../config/database.php';

// Fetch inquiries from the database
$sql = "SELECT * FROM inquiries";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

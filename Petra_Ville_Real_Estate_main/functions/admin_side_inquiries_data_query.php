<?php
// Database connection
include '../config/database.php';

// Perform the query to fetch inquiries data
$query = "SELECT i.*, p.province, pr.property_name, it.inquiry_type, ut.unit_type, tr.tcp_range, pi.product_interest
          FROM inquiries i
          LEFT JOIN provinces p ON i.province_id = p.province_id
          LEFT JOIN properties pr ON i.property_id = pr.property_id
          LEFT JOIN inquiry_types it ON i.inquiry_type_id = it.inquiry_type_id
          LEFT JOIN unit_types ut ON i.unit_type_id = ut.unit_type_id
          LEFT JOIN tcp_ranges tr ON i.tcp_range_id = tr.tcp_range_id
          LEFT JOIN product_interests pi ON i.product_interest_id = pi.product_interest_id
          ORDER BY i.submission_time DESC";

$result = $conn->query($query);

// Close the database connection
$conn->close();
?>

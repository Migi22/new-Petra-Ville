<?php
session_start();

// Database connection
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check for blank fields
    $requiredFields = ['firstName', 'lastName', 'email', 'phone', 'province', 'propertyName', 'inquiryType', 'unitType', 'tcpRange', 'productInterest', 'message'];
    $errors = [];

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $errors[] = "Please fill in all fields.";
            break; // Stop checking if one blank field is found
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    } else {
        // Sanitize input data to prevent SQL injection
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $province = mysqli_real_escape_string($conn, $_POST['province']);
        $propertyName = mysqli_real_escape_string($conn, $_POST['propertyName']);
        $inquiryType = mysqli_real_escape_string($conn, $_POST['inquiryType']);
        $unitType = mysqli_real_escape_string($conn, $_POST['unitType']);
        $tcpRange = mysqli_real_escape_string($conn, $_POST['tcpRange']);
        $productInterest = mysqli_real_escape_string($conn, $_POST['productInterest']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        // Check if email is already registered
        $emailExistsQuery = "SELECT user_id FROM users WHERE email = '$email'";
        $result = $conn->query($emailExistsQuery);

        // Proceed with the insertion regardless of whether the email is existing or not
        $sql = "INSERT INTO inquiries (first_name, last_name, email, phone, province_id, property_id, inquiry_type_id, unit_type_id, tcp_range_id, product_interest_id, message)
                VALUES ('$firstName', '$lastName', '$email', '$phone', '$province', '$propertyName', '$inquiryType', '$unitType', '$tcpRange', '$productInterest', '$message')";

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $userId = $row['user_id'];

            // Proceed with the insertion
            $sql = "INSERT INTO inquiries (user_id, first_name, last_name, email, phone, province_id, property_id, inquiry_type_id, unit_type_id, tcp_range_id, product_interest_id, message)
                    VALUES ('$userId', '$firstName', '$lastName', '$email', '$phone', '$province', '$propertyName', '$inquiryType', '$unitType', '$tcpRange', '$productInterest', '$message')";

            if ($conn->query($sql) === TRUE) {
                $_SESSION['success_message'] = "Your inquiry is recorded. Thank you <3";
                header("Location: ../pages/success_page.php");
                exit();
            } else {
                $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            $_SESSION['error_message'] = "The email does not exist.";
            header("Location: ../pages/error_page.php");
            exit();
        }
    }
}

$conn->close();
?>

<?php
session_start();

// Check if a success message is set in the session
if (isset($_SESSION['errror_message'])) {
    $successMessage = $_SESSION['errror_message'];
    // Clear the success message from the session to avoid displaying it again
    unset($_SESSION['errror_message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/success_error.css">
    <title>Thank You!</title>
</head>
<body>
    <h1>Thank You!</h1>
    <?php
    if (isset($successMessage)) {
        echo "<p>{$successMessage}</p>";
    }
    ?>
    <h5><a href="../index.php">Go Back</a></h5>
</body>
</html>
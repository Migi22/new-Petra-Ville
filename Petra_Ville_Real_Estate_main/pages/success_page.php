<?php
session_start();

// Check if a success message is set in the session
if (isset($_SESSION['success_message'])) {
    $successMessage = $_SESSION['success_message'];
    // Clear the success message from the session to avoid displaying it again
    unset($_SESSION['success_message']);
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
    <div id="main-container">
        <h1>Thank You!</h1>
        <?php
        if (isset($successMessage)) {
            echo "<p>{$successMessage}</p>";
        }
        ?>
        <h5><a href="../index.php">Go Back</a></h5>
    </div>
    
</body>
</html>

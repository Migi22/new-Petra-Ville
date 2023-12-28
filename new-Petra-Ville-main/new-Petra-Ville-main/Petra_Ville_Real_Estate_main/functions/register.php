<?php
                //Database connection
                include '../config/database.php';
                
                // Initialize error variable
                $error = '';
                
                // Check if the form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve registration data
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $confirmPassword = $_POST['confirmPassword'];
                
                    // Check if passwords match
                    if ($password !== $confirmPassword) {
                        echo 'Passwords do not match.';
                    } else {
                        // Hash the password
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                
                        // Use prepared statement to insert data into the table
                        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
                        $stmt->bind_param("ss", $email, $hashedPassword);
                
                        if ($stmt->execute()) {
                            header('Location: ../pages/login_page.php'); // Redirect upon successful registration
                            exit;
                        } else {
                            if ($conn->errno == 1062) { // 1062 is the MySQL error code for duplicate entry
                                echo 'Email address already exists.';
                            } else {
                                echo "Error: " . $stmt->error;
                            }
                        }
                
                        // Close the prepared statement
                        $stmt->close();
                    }
                }
                
                // Close the connection
                $conn->close();
                ?>
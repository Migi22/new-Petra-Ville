<?php
echo "nakasulod";
                /*
                $servername = "sql301.infinityfree.com";
                $username = "if0_35599178";
                $password = "10CBmwQfMTE27y";
                $dbname = "if0_35599178_petra_ville";
                */
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "petra_ville";
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
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
                            header('Location: ../index.php'); // Redirect upon successful registration
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
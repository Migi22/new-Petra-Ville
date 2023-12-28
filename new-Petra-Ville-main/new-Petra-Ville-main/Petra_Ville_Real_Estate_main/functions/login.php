<?php
                  session_start();
                  // Check if the user is already logged in
                  if (isset($_SESSION['user_email'])) {
                    // Redirect the user to the index page
                    header("Location: index.php");
                    exit();
                  }

                  //Database connection
                  include '../config/database.php';
                

                  // Check if form is submitted
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                      // Retrieve login data
                      $email = $_POST['email'];
                      $enteredPassword = $_POST['password'];

                      // SQL query to check if the user exists
                      $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          // User found, verify password
                          $row = $result->fetch_assoc();

                          /* debugging
                          echo "Entered Password: $enteredPassword <br>";
                          echo "Hashed Password from DB: " . $row['password'] . "<br>";*/

                          if (password_verify($enteredPassword, $row['password'])) {
                            $_SESSION['user_email'] = $email;
                            header("Location: ../index.php");
                          } else {
                              echo "Incorrect password.";
                              
                          }
                      } else {
                          echo "User not found.";
                          $email = "";
                      }
                    }

                  // Close the connection
                  $conn->close();
                ?>
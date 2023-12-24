<?php
                  session_start();
                  // Check if the user is already logged in
                  if (isset($_SESSION['user_email'])) {
                    // Redirect the user to the index page
                    header("Location: index.php");
                    exit();
                  }


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
<?php
//ONLINE
/*
$servername = "sql301.infinityfree.com";
$username = "if0_35599178";
$password = "10CBmwQfMTE27y";
$dbname = "if0_35599178_petra_ville";
*/



//LOCALHOST

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
?>
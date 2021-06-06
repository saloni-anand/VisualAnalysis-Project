<?php
$servername = "localhost";
$username_root = "root";
$password = "";
$db="musicrec";
#echo "Connected";
// Create connection
$conn = new mysqli($servername, $username_root, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    //echo "Connected successfully";
?>
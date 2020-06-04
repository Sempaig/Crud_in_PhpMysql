<?php
session_start();
$servername = "localhost";
$database = "php_mysql_crud";
$username = "root";
$password = "albsem12";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($conn);
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "resc";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$BASE_URL = "http://localhost/resc-main/"

?>
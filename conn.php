<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "resc";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$BASE_URL = "http://localhost/resc-main/"

?>
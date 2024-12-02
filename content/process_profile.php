<?php
session_start();
include('..\conn.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$query = "SELECT 
                u18.18_name, 
                u18.18_email, 
                u18.18_bio, 
                u18.18_role, 
                u18.18_profile_photo_url, 
                s12.m12_username, 
                s12.m12_email AS signup_email
          FROM m18_userprofiles u18
          JOIN m12_signup s12 ON u18.m12_id = s12.m12_id
          WHERE u18.m12_id = ?";
$stmt = $conn->prepare($query);

if ($stmt === false) {
    die('MySQL prepare() failed: ' . $conn->error);
}

$stmt->bind_param("i", $user_id);

$stmt->execute();

$stmt->bind_result($user_name, $user_email, $bio, $role, $profile_photo_url, $username, $signup_email);

$stmt->fetch();

$stmt->close();

// echo "Name: $user_name<br>";
// echo "Email: $user_email<br>";
// echo "Bio: $bio<br>";
// echo "Role: $role<br>";
// echo "Profile Photo URL: $profile_photo_url<br>";
// echo "Username: $username<br>";
// echo "Signup Email: $signup_email<br>";
?>

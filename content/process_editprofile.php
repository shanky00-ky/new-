<?php
session_start();
include('conn.php');


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
$user_id = $_SESSION['user_id'];
$name = $role = $bio = $email = $photo_url = "";
$query = "SELECT * FROM m18_userprofiles WHERE m12_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$user_profile = $stmt->get_result()->fetch_assoc();
$stmt->close();


$query_email = "SELECT m12_email FROM m12_signup WHERE m12_id = ?";
$stmt_email = $conn->prepare($query_email);
$stmt_email->bind_param("i", $user_id);
$stmt_email->execute();
$user_email = $stmt_email->get_result()->fetch_assoc()['m12_email'];
$stmt_email->close();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['18_name'] ?? '';
    $role = $_POST['18_role'] ?? '';
    $bio = $_POST['18_bio'] ?? '';
    $email = $_POST['18_email'] ?? '';
    if (isset($_FILES['profile-pic']) && $_FILES['profile-pic']['error'] == 0) {
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'webp'];
        $file_info = pathinfo($_FILES['profile-pic']['name']);
        $extension = strtolower($file_info['extension']);

        if (in_array($extension, $allowed_extensions)) {
            $upload_dir = 'resc-main/content/images/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true); 
            }

            $new_photo_name = $upload_dir . uniqid() . '.' . $extension;
            if (move_uploaded_file($_FILES['profile-pic']['tmp_name'], $new_photo_name)) {
                $photo_url = $new_photo_name;
            } else {
                echo "Error uploading the file.";
                exit();
            }
        } else {
            echo "Only JPG, JPEG, and PNG files are allowed.";
            exit();
        }
    } else {
        $photo_url = $user_profile['18_profile_photo_url'];  
    }

    
    $query_update_profile = "UPDATE m18_userprofiles SET 18_name = ?, 18_role = ?, 18_bio = ?, 18_profile_photo_url = ? WHERE m12_id = ?";
    $stmt_update_profile = $conn->prepare($query_update_profile);
    $stmt_update_profile->bind_param("ssssi", $name, $role, $bio, $photo_url, $user_id);


    $query_update_user = "UPDATE m12_signup SET m12_email = ? WHERE m12_id = ?";
    $stmt_update_user = $conn->prepare($query_update_user);
    $stmt_update_user->bind_param("si", $email, $user_id);

    if ($stmt_update_profile->execute() && $stmt_update_user->execute()) {
        header("Location: dashboard.php");
    } else {
        echo "Error updating profile: " . $conn->error;
    }

    $stmt_update_profile->close();
    $stmt_update_user->close();
}
?>

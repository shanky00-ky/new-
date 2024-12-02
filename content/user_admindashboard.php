<?php
session_start();
include('.\conn.php'); 

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header('Location: login.php');
    exit();
}

$query = "SELECT m12_id, m12_username, m12_email, m12_status FROM m12_signup";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error fetching users: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
       
    </style>
</head>
<body>

<header>
    User Management
</header>

<div class="container">
    <h2>Manage Users</h2>

    <a href="add_user.php" class="add-user-btn">Add New User</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($user = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$user['m12_id']}</td>
                        <td>{$user['m12_username']}</td>
                        <td>{$user['m12_email']}</td>
                        <td>{$user['m12_status']}</td>
                        <td>
                            <a href='edit_user.php?id={$user['m12_id']}' class='action-btn'>Edit</a>
                            <a href='delete_user.php?id={$user['m12_id']}' class='action-btn' style='background-color: #dc3545;'>Delete</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

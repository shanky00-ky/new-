
<?php
session_start();
include('.\conn.php');

if (!isset($_SESSION['otp'])) {
    header("Location: signup.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_otp = $_POST['otp'];

    if ($user_otp == $_SESSION['otp'] && time() < $_SESSION['otp_expiration']) {
        
        $email = $_SESSION['email'];
        $password = password_hash($_SESSION['password'], PASSWORD_DEFAULT); // Hash the password

        $query = "INSERT INTO m12_signup (m12_email, m12_password) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $email, $password);

        if ($stmt->execute()) {
            
            unset($_SESSION['otp']);
            unset($_SESSION['otp_expiration']);
            unset($_SESSION['email']);
            unset($_SESSION['password']);

            echo "Signup successful! Please <a href='login.php'>login</a>.";
        } else {
            echo "Error during signup. Please try again.";
        }
    } else {
        echo "Invalid OTP or OTP has expired.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
</head>
<body>
    <form action="verify_signup_otp.php" method="POST">
        <label for="otp">Enter OTP</label>
        <input type="text" id="otp" name="otp" required>
        
        <button type="submit">Verify OTP</button>
    </form>
</body>
</html>

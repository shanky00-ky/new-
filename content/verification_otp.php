<!-- 
<!-- <?php
session_start();

if (!isset($_SESSION['otp'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_otp = $_POST['otp'];

    if ($user_otp == $_SESSION['otp'] && time() < $_SESSION['otp_expiration']) {
     
        echo "OTP verified successfully! You are now logged in.";
       
        unset($_SESSION['otp']);
        unset($_SESSION['otp_expiration']);
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid OTP or OTP has expired.";
    }
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
</head>
<body>
    <form action="verify_otp.php" method="POST">
        <label for="otp">Enter OTP</label>
        <input type="text" id="otp" name="otp" required>
        
        <button type="submit">Verify OTP</button>
    </form>
</body>
</html> -->

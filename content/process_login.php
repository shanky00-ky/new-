<?php
include(".\conn.php");
session_start();

if (isset($_POST['login'])) {
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "Please enter both email and password.";
    } else {
        
        $stmt = $conn->prepare("SELECT * FROM m12_signup WHERE m12_email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $stored_password = $user['m12_password']; 

            if (password_verify($password, $stored_password)) {
                
                $_SESSION['user_id'] = $user['m12_id'];
                $_SESSION['user_email'] = $user['m12_email']; 
                $_SESSION['user_password'] = $user['m12_password'];
                $_SESSION['user_role'] = 'user';
                
                header("Location: profile.php");
                exit();
            } else {
               
                echo "<script> 
                alert('Incorrect password');
                setTimeout(function() {
                    window.location.href='login.php'; 
                }, 500);
                </script>";
            }
        } else {
            
            echo "<script> 
            alert('No user found with that email');
            setTimeout(function() {
                window.location.href='login.php'; 
            }, 500);
            </script>";
        }
    }
}
?>

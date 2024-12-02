<?php
include(".\conn.php");
session_start();

if (isset($_POST['adminlogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (empty($email) || empty($password)) {
        echo "Please enter both email and password.";
    } else {
        
        $stmt = $conn->prepare("SELECT m19_id, m19_password, m19_email FROM m19_admin WHERE m19_email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $stored_password = $user['m19_password']; 
            
            
            if (password_verify($password, $stored_password)) {
                
                $SESSION ['user_role'] = 'admin';
                $_SESSION['user_id'] = $user['m19_id'];
                $_SESSION['user_email'] = $user['m19_email']; 
                $_SESSION['user_password'] = $user['m19_password'];
                
                header("Location: admin.php");
                exit();
            } else {
               
                echo "<script> 
                alert('Incorrect password');
                window.location.href='login.php'; 
                </script>";
            }
        } else {
           
            echo "<script> 
            alert('No user found with that email');
            window.location.href='login.php'; 
            </script>";
        }

        
        $stmt->close();
    }
}
?>

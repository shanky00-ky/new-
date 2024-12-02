<?php include(".\conn.php");
if (isset($_POST['confirm_password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "<script>
        alert('password does not match please reenter the password.');
        setTimeout(function() {
            window.location.href = 'signup.php';
        }, 1000); 
      </script>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("SELECT * FROM m12_signup WHERE m12_email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {  
            echo "<script>
                    alert('Email already exists.');
                    setTimeout(function() {
                        window.location.href = 'signup.php';
                    }, 1000); 
                  </script>";
        } else {
            $stmt = $conn->prepare("INSERT INTO m12_signup (m12_username, m12_email, m12_password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $hashed_password);
            $stmt->execute();
            echo "<script>
            alert('signup done.');
            setTimeout(function() {
                window.location.href = 'login.php';
            }, 2000); 
          </script>";
            exit();
        }
    }
}
?>

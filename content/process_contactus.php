<?php
include(".\conn.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $NAME = $_POST['name'];
    $EMAIL = $_POST['email'];
    $MESSAGE = $_POST['message'];

    if (!empty($NAME) && !empty($EMAIL) && !empty($MESSAGE)) {
        $sql = 'INSERT INTO m05_contact (m05_name, m05_email, m05_message) VALUES (?, ?, ?)';

        
        $STMT = $conn->prepare($sql);

        if ($STMT === false) {
            die('Error preparing statement: ' . $conn->error);
        }

       
        $STMT->bind_param("sss", $NAME, $EMAIL, $MESSAGE);

        
        if ($STMT->execute()) {
            header('Location: index.php?success=1');
        } else {
            
            die('Error executing statement: ' . $STMT->error);
        }

 
        $STMT->close();
    } else {
        
        echo 'Please fill in all fields.';
    }
}
?>

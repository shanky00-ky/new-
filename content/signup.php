<?php
include("../conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up | Volleyball</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: black;
      color: white;
    }

    header {
      background-color: #101820;
      padding: 15px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header h2 {
      margin: 0;
      color: #00bcd4;
    }

    .navbar {
      display: flex;
      gap: 20px;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      font-size: 16px;
      padding: 8px 15px;
      background-color: #00bcd4;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .navbar a:hover {
      background-color: #00796b;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 122vh;
      padding: 20px;
    }

    .login-wrapper {
      background: #1a1a1a;
      padding: 30px;
      border-radius: 8px;
      width: 400px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .login-logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-logo img {
      width: 150px; 
      height: auto;
    }

    .login-form h2 {
      text-align: center;
      color: #00bcd4;
    }

    .login-form label {
      display: block;
      margin-bottom: 8px;
      color: #ccc;
    }

    .login-form input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 4px;
    }

    .login-form button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: #00bcd4;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    .login-form button:hover {
      background-color: #00796b;
    }

    .login-options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 10px;
      font-size: 14px;
    }

    .login-options a {
      color: #00bcd4;
      text-decoration: none;
    }

    .login-options a:hover {
      text-decoration: underline;
    }

    .signup {
      text-align: center;
      margin-top: 20px;
    }

    .signup a {
      color: #00bcd4;
      text-decoration: none;
      font-weight: bold;
    }

    .signup a:hover {
      text-decoration: underline;
    }

    footer {
      background: #101820;
      color: #ccc;
      padding: 20px 0;
      text-align: center;
    }

    footer p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<header>
    <h2>Volleyball League</h2>
    <nav class="navbar">
      <?php 
      $SQL ="SELECT * FROM m11_loginpage WHERE m11_id = 1;";
      $result = mysqli_query($conn, $SQL);
      while ($row = mysqli_fetch_assoc($result)){
        if (in_array($row["m11_name"], ["Home","Services"])){
          ?>
      <a href="..\<?= $row['m11_url']?>"><?= $row['m11_name']?></a>
   <?php  }}
   ?>
    </nav>
  </header>
<div class="container">
  <div class="form-container">
    <div class="logo">
      <img src="images/logo.png" alt="Logo">
    </div>
    <form action="process_signup.php" method="post" class="login-form">
      <h2>Sign Up</h2>
      <div class="tooltip">
        <input type="text" name="name" placeholder="Name" required>
        <span class="tooltiptext">Enter your full name</span>
      </div>
      <div class="tooltip">
        <input type="email" name="email" placeholder="Email" required>
        <span class="tooltiptext">Enter a valid email address</span>
      </div>
      <div class="tooltip">
        <input type="password" name="password" id="password" placeholder="Password" required>
        <span class="tooltiptext">Password must be 8-16 characters</span>
      </div>
      <div id="password-strength"></div>
      <input type="password" name="confirm_password" placeholder="Confirm Password" required>
      <button type="submit">Sign Up</button>
      <button type="reset">Clear</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
  </div>
</div>

<footer>
  <div class="footer-container">
    <?php 
    $sql = 'SELECT * FROM m08_footer WHERE m08_status = 1 ;';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['m08_name'] == 'Logo') {
      ?>
        <div class="footer-logo">
          <img src="images/<?= $row['m08_url']?>" alt="<?= $row['m08_name']?>" class="logo">
        </div>
      <?php }
    ?>
    <div class="footer-container">
      <?php
      if ($row['m08_name'] == 'content'){
      ?>
        <div class="footer-content">
          <p><?= $row['m08_disc']?></p>
      <?php }
      if (in_array($row['m08_name'],['Facebook','Twitter','Instagram'])){
      ?>
        <div class ="footer-social">
          <a href="<?= $row['m08_url']; ?>"><?= $row['m08_name']?></a>
        </div>
      <?php }
      if (in_array($row['m08_name'], ['Contactus','Phoneno'])){
      ?>
        <div class="additional-info">
          <p><?= $row['m08_name']?>: <?= $row['m08_disc']?></p>
        </div>
      </div>
    <?php }
    if ($row['m08_name'] == 'location'){
    ?>
      <div class="footer-map">
        <iframe 
          src="<?= $row['m08_url'];?>" 
          width="350" 
          height="290" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    <?php }
  }
  ?>
  </div>
</footer>
<script>
  const passwordInput = document.getElementById('password');
  const strengthDisplay = document.getElementById('password-strength');

  passwordInput.addEventListener('input', function() {
    const password = passwordInput.value;
    let strength = '';


    if (password.length < 8) {
      strength = 'Weak';
      strengthDisplay.style.color = 'red';
    } else if (password.length >= 8 && password.length <= 12) {
      strength = 'Medium';
      strengthDisplay.style.color = 'orange';
    } else if (password.length > 12) {
      strength = 'Strong';
      strengthDisplay.style.color = 'green';
    }

    strengthDisplay.innerHTML = 'Password Strength: ' + strength;
  });
</script>
</body>
</html>

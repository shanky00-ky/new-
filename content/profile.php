<?php 
include(".\conn.php");
include(".\process_profile.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/profile.css">
  <title>Volleyball Profile Page</title>
</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <img src="images/volleyball-logo-on-the-background-of-multi-vector-9105476-removebg-preview.webp" alt="Logo">
      <span>Volleyball League</span>
    </div>
    <div class="nav-links">
      <?php 
      $sql = "SELECT * FROM m13_dashboard WHERE m13_status = 1;";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        if ($row["m13_name"] == "Home") {
          ?>
          <a href="..\<?= $row['m13_url']?>" class="active"><?= $row['m13_name']?></a>
          <?php
        }
        if ($row["m13_name"] != "Home") {
          ?>
          <a href="<?= $row['m13_url']?>"><?= $row['m13_name']?></a>
          <?php 
        }
      }
      ?>
    </div>
  </nav>

  <div class="profile-container">
    <div class="profile-header">
      <img src="<?= $profile_photo_url?>" alt="User Photo" class="profile-pic">
      <h1><?= $username ?></h1>
      <h2><?= $user_email?></h2>
      <p class="user-role"><?= $role ?></p>
    </div>

    <div class="profile-stats">
      <div class="stat-box">
        <h3>Matches Played</h3>
        <p>45</p>
      </div>
      <div class="stat-box">
        <h3>Wins</h3>
        <p>32</p>
      </div>
      <div class="stat-box">
        <h3>Total Points</h3>
        <p>198</p>
      </div>
    </div>

    <div class="edit-profile">
   <button><a href="edit_profile.php" class="edit-btn">Edit Profile</a></button> 
    </div>
  </div>

  <script src="scripts.js"></script>
</body>
</html>

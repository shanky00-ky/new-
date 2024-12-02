<?php
include(".\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <link rel="stylesheet" href="css/editprofile.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
  <div class="edit-profile-container">
    <div class="edit-profile-header">
      <h1>Edit Your Profile</h1>
    </div>
    <form action="process_editprofile.php" method="POST" enctype="multipart/form-data" class="edit-profile-form">
      <div class="form-group">
        <label for="profile-pic">Profile Picture</label>
        <div class="image-upload">
          <input type="file" id="profile-pic" name="profile-pic" accept="image/*">
        </div>
      </div>
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="18_name" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="role">Role</label>
        <input type="text" id="role" name="18_role" placeholder="Your role (e.g., Setter)" required>
      </div>
      <div class="form-group">
        <label for="bio">Bio</label>
        <textarea id="bio" name="18_bio" rows="4" placeholder="Tell us about yourself..."></textarea>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="18_email" placeholder="Enter your email" required>
      </div>
      <div class="form-buttons">
        <button type="submit" class="btn-save">Save Changes</button>
        <button type="button" class="btn-cancel">Cancel</button>
      </div>
    </form>
  </div>
</body>
</html>

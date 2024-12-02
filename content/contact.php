<?php
include(".\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<header>
  <h1>Volleyball</h1>
  <?php
    $sql = 'SELECT * FROM m12_signup WHERE m12_status = 1;';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['m12_name'] == 'Logo') {
        ?>
        <div class="footer-logo">
          <img src="images\<?= $row['m12_url']?>" alt="<?= $row['m12_name']?>" class="logo">
        </div>
        <?php }
        ?>
    <?php
    
    ?>
    <nav class="nav-links">
      <?php
      $sql = "SELECT * FROM `m12_signup`;";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        if ($row['m12_name'] == "Home") {
        ?>
          <button onclick="window.location.href='<?= $BASE_URL . $row['m12_url']; ?>'" class="cta-btn">
            <?= isset($row['m12_url']) ? $row['m12_name'] : 'Home'; ?>
          </button>
        <?php
        }
        ?>
      <?php
      }
    }
      ?>
    </nav>
</header>
  <div id="header-placeholder"></div>

  <div class="contact-container">
    <div class="left-col">
      <img class="logo" src="images/volleyball-blue-logo-vector-21638307-removebg-preview.png" alt="Logo"/>
    </div>
    <div class="right-col">
      <h1>Contact Us</h1>
      <form id="contact-form" method="post">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Your Full Name" required />
  
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Your Email Address" required />
  
        <label for="message">Message</label>
        <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
  
        <button type="submit" id="submit" name="submit">Send</button>
      </form>
      <div id="error"></div>
      <div id="success-msg"></div>
    </div>
  </div>

  <div id="footer-placeholder"></div>
  <script src="js/header.js"></script>
  <script src="js/footer.js"></script>
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
        <!-- <a href="#">Twitter</a>
        <a href="#">Instagram</a> -->
      </div>
      <?php}
      if (in_array($row['m08_name'] ,['Contactus','Phoneno'])){
        ?>
      <div class="additional-info">
        <p><?= $row['m08_name']?>: <?= $row['m08_disc']?></p>
        <!-- <p>Phone: 548454874774</p> -->
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
</body>
</html>

<?php
include(".\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Planning | Volleyball</title>
  <style>
 
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #101820;
      color: #f2f2f2;
    }

    h1, h2, h3 {
      text-align: center;
      color: #00bcd4;
    }

    p {
      line-height: 1.6;
      font-size: 16px;
      color: #dddddd;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    header {
      background: linear-gradient(to right, #00bcd4, #004d40);
      color: white;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      font-size: 36px;
      margin: 0;
    }
    .event-planning {
      padding: 50px 20px;
      background: #0d1117;
    }

    .event-planning h2 {
      color: #00bcd4;
      font-size: 32px;
      margin-bottom: 30px;
    }

    .event-planning p {
      font-size: 18px;
      color: #cccccc;
      margin-bottom: 20px;
    }
    .event-list {
      padding: 50px 20px;
    }

    .event-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
      background-color: #1a1a1a;
    }

    .event-table th, .event-table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #333;
    }

    .event-table th {
      background-color: #00bcd4;
      color: white;
    }

    .event-table td {
      color: #cccccc;
    }

    .event-table tr:hover {
      background-color: #333;
    }
    .event-details {
      background: #0d1117;
      padding: 50px 20px;
    }

    .event-details h2 {
      color: #00bcd4;
      margin-bottom: 30px;
      text-align: center;
    }

    .event-form input, .event-form textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 4px;
    }

    .event-form button {
      padding: 10px 20px;
      background-color: #00bcd4;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .event-form button:hover {
      background-color: #00796b;
    }
    footer {
      background: #1a1a1a;
      padding: 20px;
      color: #cccccc;
      text-align: center;
    }

  </style>
</head>
<body>

<header>
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
  <?php }
  ?>
  <h1>Volleyball Event Planning</h1>
</header>

<section class="event-planning container">
  <h2>The Volleyball Event Page</h2>
  <p>You can see the upcoming volleyball events, tournaments, fundraisers, and community gatherings.</p>
</section>

<section class="event-list container">
  <h2>Upcoming Events</h2>
  <p>Check out the upcoming volleyball events and tournaments. </p>

  <table class="event-table">
    <thead>
      <tr>
        <th>Event Name</th>
        <th>Date</th>
        <th>Location</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $sql = 'SELECT * FROM m15_eventmng WHeRE m15_status = 1;';
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
      <tr>
        <td><?= $row['m15_Eventname']; ?></td>
        <td><?= $row['m15_date']; ?></td>
        <td><?= $row['m15_location']; ?></td>
        <td><?= $row['m15_regstatus']; ?></td>
      </tr>

      <!-- <tr>
        <td>Community Volleyball Fundraiser</td>
        <td>Jan 15, 2025</td>
        <td>Beach Court</td>
        <td>Registration Closed</td>
      </tr>
      <tr>
        <td>Youth Volleyball Camp</td>
        <td>Feb 5, 2025</td>
        <td>Indoor Gym</td>
        <td>Registration Open</td>
      </tr> -->
    </tbody>
    <?php 
      }
      ?>
  </table>
</section>
<footer>
<div class="footer-container">
  <?php 
  $sql = 'SELECT * FROM m08_footer WHERE m08_status = 1 ;';
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row['m08_name'] == 'Logo') {
      ?>
      <div class="footer-logo">
        <img src="images\<?= $row['m08_url']?>" alt="<?= $row['m08_name']?>" class="logo">
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
        <p><?= $row['m08_disc']?>: <?= $row['m08_name']?></p>
        <!-- <p>Phone: 548454874774</p> -->
      </div>
    </div>
    <?php }
    if ($row['m08_name'] == 'location'){
      ?>
    <div class="footer-map">
      <iframe 
        src="<?= $row['m08_url'];?>" 
        width="700" 
        height="350" 
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

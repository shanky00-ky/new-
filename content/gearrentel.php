<?php
include(".\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gear Rental | Volleyball</title>
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

    .gear-rental {
      padding: 50px 20px;
      background: #0d1117;
    }

    .gear-rental h2 {
      color: #00bcd4;
      font-size: 32px;
      margin-bottom: 30px;
    }

    .gear-rental p {
      font-size: 18px;
      color: #cccccc;
      margin-bottom: 20px;
    }

    .gear-list {
      padding: 50px 20px;
    }

    .gear-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
      background-color: #1a1a1a;
    }

    .gear-table th, .gear-table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #333;
    }

    .gear-table th {
      background-color: #00bcd4;
      color: white;
    }

    .gear-table td {
      color: #cccccc;
    }

    .gear-table tr:hover {
      background-color: #333;
    }
    .gear-form-section {
      background: #0d1117;
      padding: 50px 20px;
    }

    .gear-form-section h2 {
      color: #00bcd4;
      margin-bottom: 30px;
      text-align: center;
    }

    .gear-form input, .gear-form select, .gear-form textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 4px;
    }

    .gear-form button {
      padding: 10px 20px;
      background-color: #00bcd4;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .gear-form button:hover {
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
  <h1>Volleyball Gear Rental</h1>
  <p>Rent your volleyball gear easily and quickly!</p>
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
      ?>
</header>

<section class="gear-rental container">
  <h2>Welcome to Volleyball Gear Rental</h2>
  <p>We offer a variety of volleyball gear for rent, including balls, nets, shoes, knee pads, and jerseys. Whether you’re playing in a tournament, training, or just want to play for fun, we have you covered. Check out the available gear and place your rental request below.</p>
</section>

<section class="gear-list container">
  <h2>Available Gear for Rent</h2>
  <p>Select the gear you want to rent from the list below. You can choose the item, rental period, and submit your request.</p>

  <table class="gear-table">
    <thead>
      <tr>
        <th>Gear Item</th>
        <th>Category</th>
        <th>Price per Day</th>
        <th>Availability</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $sql= 'SELECT * FROM m16_gearpage WHERE m16_status = 1';
      $result= mysqli_query($conn, $sql);
      while ($row=mysqli_fetch_array($result))
      { ?>
      <tr>
        <td><?= $row['m16_name']; ?></td>
        <td><?= $row['m16_Category']; ?></td>
        <td><?= $row['m16_price']; ?></td>
        <td><?= $row['m16_Availability']; ?></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</section>

<section class="gear-form-section container">
  <h2>Rent Gear</h2>
  <p>Fill out the form below to rent your gear. After submitting, we’ll confirm the availability and rental duration.</p>

  <form class="gear-form" action="process_gear.php" method="post">
    <label for="gear-item">Select Gear Item</label>
    <select id="gear-item" name="gear-item" required>
      <option value="volleyball">Official Volleyball</option>
      <option value="net">Professional Net</option>
      <option value="knee-pads">Sports Knee Pads</option>
      <option value="shoes">Volleyball Shoes</option>
      <option value="jerseys">Team Jerseys (Set of 6)</option>
    </select>

    <label for="rental-duration">Rental Duration (days)</label>
    <input type="number" id="rental-duration" name="rental-duration" min="1" required>

    <label for="delivery-option">Delivery Option</label>
    <select id="delivery-option" name="delivery-option" required>
      <option value="pickup">Pick up at Store</option>
      <option value="delivery">Delivery to Address</option>
    </select>

    <label for="special-requests">Special Requests</label>
    <textarea id="special-requests" name="special-requests" placeholder="Enter any special requests or requirements (optional)"></textarea>

    <button type="submit">Submit Rental Request</button>
  </form>
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

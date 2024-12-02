<?php
include(".\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Volleyball Event</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: black;
  color: white;
}

header {
  background-color: #000000;
  padding: 20px;
  text-align: center;
}

header h1 {
  margin: 0;
  color: #fff;
}

.navbar .cta-btn {
  width: 250px;
  padding: 15px;
  background-color: #00bcd4;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;
}

.navbar .cta-btn:hover {
  background-color:  #00796b;
}

.navbar .logo {
  display: flex;
  align-items: center;
  white-space: nowrap; 
}

.navbar .logo img {
  width: 50px;
  height: 50px;
  margin-right: 10px;
}

.navbar .logo span {
  font-size: 22px; 
  font-weight: 600; 
  color: #fff;
}
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      padding: 20px;
    }
    .registration-section {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: rgb(3, 0, 0);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2, h5 {
            text-align: center;
        }
        .player-info {
            background-color: #000000;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    input, select {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 4px;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #00bcd4;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #00796b;
    }
    footer {
      background: black;
      color: #ccc;
      text-align: center;
      padding: 10px;
    }
    .footer .logo  {
      width: 90px;
      height: 90px;
    }
  </style>
</head>
<body>
    <header class="navbar">
      <?php
      $sql = 'SELECT * FROM m11_loginpage WHERE m11_status = 1;';
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        if ($row['m11_name'] == 'Logo') {
      ?>
        <div class="logo">
      <img src="<?= $row['m11_url']; ?>" alt="Volleyball Logo">
      <span>Volleyball League</span>
    </div>
      <?php
      }
      ?>
      <nav class="nav-links">
        <?php
        $sql = "SELECT * FROM `m11_loginpage`;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          if ($row['m11_name'] == "Home") {
          ?>
            <button onclick="window.location.href='<?= $BASE_URL . $row['m11_url']; ?>'" class="cta-btn">
              <?= isset($row['m11_url']) ? $row['m11_name'] : 'VolleyBall HomePgae'; ?>
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

<section class="registration-section">
  <h2>Team and Players Registration</h2>
  <form id="registration-form" class="needs-validation" novalidate>
      <h3 class="mb-3">Team Information</h3>
      <div class="mb-3">
          <label for="teamName" class="form-label">Team Name</label>
          <input type="text" class="form-control" id="teamName" name="teamName" required>
          <div class="invalid-feedback">Please provide a team name.</div>
      </div>
      <div class="mb-3">
          <label for="coachName" class="form-label">Coach Name</label>
          <input type="text" class="form-control" id="coachName" name="coachName" required>
          <div class="invalid-feedback">Please provide the coach's name.</div>
      </div>
      <div class="mb-3">
          <label for="contactEmail" class="form-label">Contact Email</label>
          <input type="email" class="form-control" id="contactEmail" name="contactEmail" required>
          <div class="invalid-feedback">Please provide a valid email address.</div>
      </div>
      <div class="mb-3">
          <label for="contactPhone" class="form-label">Contact Phone Number</label>
          <input type="tel" class="form-control" id="contactPhone" name="contactPhone" required>
          <div class="invalid-feedback">Please provide a valid phone number.</div>
      </div>

      <hr>
      <h3 class="mb-3">Players Information</h3>

      <div class="player-info">
          <h5>Player 1</h5>
          <div class="mb-3">
              <label for="player1Name" class="form-label">Player Name</label>
              <input type="text" class="form-control" id="player1Name" name="player1Name" required>
              <div class="invalid-feedback">Please provide the player's name.</div>
          </div>
          <div class="mb-3">
              <label for="player1Position" class="form-label">Player Position</label>
              <input type="text" class="form-control" id="player1Position" name="player1Position" required>
              <div class="invalid-feedback">Please provide the player's position.</div>
          </div>
          <h5>Player2</h5>
          <div class="mb-3">
              <label for="player1Name" class="form-label">Player Name</label>
              <input type="text" class="form-control" id="player1Name" name="player1Name" required>
              <div class="invalid-feedback">Please provide the player's name.</div>
          </div>
          <div class="mb-3">
              <label for="player1Position" class="form-label">Player Position</label>
              <input type="text" class="form-control" id="player1Position" name="player1Position" required>
              <div class="invalid-feedback">Please provide the player's position.</div>
          </div>
          <h5>Player3</h5>
          <div class="mb-3">
              <label for="player1Name" class="form-label">Player Name</label>
              <input type="text" class="form-control" id="player1Name" name="player1Name" required>
              <div class="invalid-feedback">Please provide the player's name.</div>
          </div>
          <div class="mb-3">
              <label for="player1Position" class="form-label">Player Position</label>
              <input type="text" class="form-control" id="player1Position" name="player1Position" required>
              <div class="invalid-feedback">Please provide the player's position.</div>
          </div>
          <h5>Player4</h5>
          <div class="mb-3">
              <label for="player1Name" class="form-label">Player Name</label>
              <input type="text" class="form-control" id="player1Name" name="player1Name" required>
              <div class="invalid-feedback">Please provide the player's name.</div>
          </div>
          <div class="mb-3">
              <label for="player1Position" class="form-label">Player Position</label>
              <input type="text" class="form-control" id="player1Position" name="player1Position" required>
              <div class="invalid-feedback">Please provide the player's position.</div>
          </div>
          <h5>Player5</h5>
          <div class="mb-3">
              <label for="player1Name" class="form-label">Player Name</label>
              <input type="text" class="form-control" id="player1Name" name="player1Name" required>
              <div class="invalid-feedback">Please provide the player's name.</div>
          </div>
          <div class="mb-3">
              <label for="player1Position" class="form-label">Player Position</label>
              <input type="text" class="form-control" id="player1Position" name="player1Position" required>
              <div class="invalid-feedback">Please provide the player's position.</div>
          </div>
          <h5>Player6</h5>
          <div class="mb-3">
              <label for="player1Name" class="form-label">Player Name</label>
              <input type="text" class="form-control" id="player1Name" name="player1Name" required>
              <div class="invalid-feedback">Please provide the player's name.</div>
          </div>
          <div class="mb-3">
              <label for="player1Position" class="form-label">Player Position</label>
              <input type="text" class="form-control" id="player1Position" name="player1Position" required>
              <div class="invalid-feedback">Please provide the player's position.</div>
          </div>
          <h5>Player7</h5>
          <div class="mb-3">
              <label for="player1Name" class="form-label">Player Name</label>
              <input type="text" class="form-control" id="player1Name" name="player1Name" required>
              <div class="invalid-feedback">Please provide the player's name.</div>
          </div>
          <div class="mb-3">
              <label for="player1Position" class="form-label">Player Position</label>
              <input type="text" class="form-control" id="player1Position" name="player1Position" required>
              <div class="invalid-feedback">Please provide the player's position.</div>
          </div>
      </div>
      <div class="text-center">
          <button type="button" class="btn btn-primary" onclick="">Proceed to Payment</button>
      </div>
  </form>
</section>

<script src ="scripts/payment.js"></script>

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
        width="550" 
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

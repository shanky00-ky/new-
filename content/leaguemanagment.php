<?php
include(".\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>League Management | Volleyball</title>
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

    .league-management {
      padding: 50px 20px;
      background: #0d1117;
    }

    .league-management h2 {
      color: #00bcd4;
      font-size: 32px;
      margin-bottom: 30px;
    }

    .league-management p {
      font-size: 18px;
      color: #cccccc;
      margin-bottom: 20px;
    }

    .teams-section {
      padding: 50px 20px;
    }

    .teams-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
      background-color: #1a1a1a;
    }

    .teams-table th, .teams-table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #333;
    }

    .teams-table th {
      background-color: #00bcd4;
      color: black;
    }

    .teams-table td {
      color: #cccccc;
    }

    .teams-table tr:hover {
      background-color: #333;
    }

    .schedule-section {
      background: #0d1117;
      padding: 50px 20px;
    }

    .schedule-section h2 {
      color: #00bcd4;
      margin-bottom: 30px;
      text-align: center;
    }

    .schedule-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
      background-color: #1a1a1a;
    }

    .schedule-table th, .schedule-table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #333;
    }

    .schedule-table th {
      background-color: #00bcd4;
      color: white;
    }

    .schedule-table td {
      color: #cccccc;
    }

    .standings-section {
      background: #0d1117;
      padding: 50px 20px;
    }

    .standings-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
      background-color: #1a1a1a;
    }

    .standings-table th, .standings-table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #333;
    }

    .standings-table th {
      background-color: #00bcd4;
      color: white;
    }

    .standings-table td {
      color: #cccccc;
    }

    .standings-table tr:hover {
      background-color: #333;
    }

    .cta-section {
      text-align: center;
      padding: 30px;
      background: #004d40;
      margin-top: 50px;
    }

    .cta-section h2 {
      margin-bottom: 20px;
      color: #ffffff;
    }

    .cta-section a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #00bcd4;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      font-size: 18px;
      transition: background-color 0.3s;
    }

    .cta-section a:hover {
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
  <h1>Volleyball League Management</h1>
  <p>Teams, matches, schedules, and standings with ease</p>
</header>

<section class="league-management container">
  <h2> League Management Dashboard</h2>
  <p> you can see the teams, schedule matches, and track standings for your volleyball league. </p>
</section>

<section class="teams-section container">
  <h2>Teams</h2>
  <p>Below is a list of teams currently participating in the league.</p>

  <table class="teams-table">
    <thead>
      <tr>
        <th>Team Name</th>
        <th>Coach</th>
        <th>Captain</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php 
    $sql = 'SELECT * FROM m14_leaguemng WHERE m14_status = 1;';
    $result = mysqli_query($conn ,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <th><?php echo $row['m14_teamnames']; ?></th>
        <th><?php echo $row['m14_coachname']; ?></th>
        <th><?php echo $row['m14_captain']; ?> </th>
        <th><?php echo $row['m14_stats']; ?></th>
      </tr>
    </tbody>
  <?php }
  ?>
</table>
</section>
<!-- <td>Team A</td>
<td>Coach John</td>
<td>Captain Alex</td>
<td>Active</td>
</tr>
<tr>
<td>Team B</td>
<td>Coach Sarah</td>
<td>Captain Rachel</td>
<td>Active</td>
</tr>
<tr>
<td>Team C</td>
<td>Coach Michael</td>
<td>Captain David</td>
<td>Inactive</td>
</tr> -->

<section class="schedule-section container">
  <h2>Match Schedule</h2>
  <p>Here you can view and update the match schedule for the current league season.</p>

  <table class="schedule-table">
    <thead>
      <tr>
        <th>Match Date</th>
        <th>Teams</th>
        <th>Location</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $sql = 'SELECT * FROM m14_leaguemng WHERE m14_status = 1;';
      $result = mysqli_query($conn ,$sql);
      while ($row = mysqli_fetch_assoc($result)) {
        if ($row['m14_schedule'] == 'Schedule') {
        ?>
      <tr>
        <td><?= $row['m14_date'];?></td>
        <td><?= $row['m14_matchsedule'];?></td>
        <td><?= $row['m14_location'];?></td>
        <td><?= $row['m14_schedule']?></td>
      </tr>
      
    </tbody>
    <?php }}
    ?>
  </table>
</section>
<!-- <tr>
  <td>Nov 26, 2024</td>
  <td>Team B vs Team C</td>
  <td>Beach Court</td>
  <td>Scheduled</td>
</tr> -->

<section class="standings-section container">
  <h2>Standings</h2>
  <p>Check the current standings of the teams in the league.</p>

  <table class="standings-table">
    <thead>
      <tr>
        <th>Rank</th>
        <th>Team</th>
        <th>Won</th>
        <th>Lost</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $sql = 'SELECT * FROM m14_leaguemng WHERE m14_status = 1 ORDER BY m14_rank ASC;';
      $result = mysqli_query($conn ,$sql);
      while ($row =mysqli_fetch_assoc($result)) {
        ?>

      <tr>
        <td><?= $row['m14_rank']; ?></td>
        <td><?= $row['m14_teamnames']; ?></td>
        <td><?= $row['m14_won']; ?></td>
        <td><?= $row['m14_matchlost']; ?></td>
      </tr>
    </tbody>
    <?php }
    ?>
  </table>
</section>
<!-- <tr>
  <td>2</td>
  <td>Team B</td>
  <td>3</td>
  <td>2</td>
  <td>1</td>
  <td>6</td>
</tr>
<tr>
  <td>3</td>
  <td>Team C</td>
  <td>3</td>
  <td>1</td>
  <td>2</td>
  <td>3</td>
</tr> -->

<section class="cta-section">
<?php
    $sql = "SELECT * FROM `01_menu`;";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['01_name'] == 'Register') {
        ?>
  <h2>Want to Join the League?</h2>
  <a href="<?= $row ['01_url']?>">Register a New Team</a>
  <?php }
    }
    ?>
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
        width="500" 
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

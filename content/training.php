<?php
include('.\conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Training Programs | Volleyball</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #121212;
      color: #ffffff;
    }

    h1, h2, h3 {
      text-align: center;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    header {
      background: linear-gradient(to right, #0066cc, #003366);
      color: white;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      font-size: 36px;
      margin: 0;
    }
    .training-section {
      padding: 50px 20px;
    }
    .program-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 30px;
    }
    .program-item {
      background: #1c1c1c;
      border: 1px solid #0066cc;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .program-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 102, 204, 0.3);
    }
    .program-item h3 {
      margin-bottom: 15px;
      font-size: 24px;
      color: #0066cc;
    }
    .program-item p {
      font-size: 16px;
      color: #cccccc;
    }
    .program-item .enroll {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #0066cc;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s;
    }
    .program-item .enroll:hover {
      background-color: #003366;
    }
    footer {
      background: #1c1c1c;
      padding: 20px;
      color: #cccccc;
      text-align: center;
    }
  </style>
</head>
<body>

<header>
  <h1>Training Programs</h1>
  <p>Step up your volleyball game with expert coaching and tailored programs.</p>
</header>
<section class="training-section">
  <h2>Our Programs</h2>
  <p>Choose the program that fits your skill level and goals:</p>

  <div class="program-grid">
    <?php
    $sql = 'SELECT * FROM m09_trainingpage WHERE m09_status = 1;';
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
      ?>
    <div class="program-item">
      <h3><?php echo $row['m09_name']?></h3>
      <p><?php echo $row ['m09_para']?></p>
      <a href=".\<?php echo $row['m09_url']?>" class="enroll"><?php echo $row['m09_name']?></a>
    </div>
    <?php
    }?>
  </div>
</section>

<!-- <div class="program-item">
  <h3>Intermediate Training</h3>
  <p>Refine your skills and build advanced techniques with professional drills.</p>
  <a href="IntermediateTraining.html" class="enroll">Enroll Now</a>
</div>
<div class="program-item">
  <h3>Advanced Coaching</h3>
  <p>Perfect your strategy and compete at the highest level with expert guidance.</p>
  <a href="advancecoaching.html" class="enroll">Enroll Now</a>
</div>
<div class="program-item">
  <h3>Fitness and Conditioning</h3>
  <p>Boost your endurance, agility, and strength with volleyball-specific workouts.</p>
  <a href="fitness.html" class="enroll">Enroll Now</a>
</div> -->
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

<?php 
include(".\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advanced Coaching | Volleyball</title>
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

    .coaching-philosophy {
      padding: 50px 20px;
      background: #0d1117;
    }

    .coaching-philosophy h2 {
      color: #00bcd4;
      font-size: 32px;
      margin-bottom: 30px;
    }

    .coaching-philosophy p {
      font-size: 18px;
      color: #cccccc;
      margin-bottom: 20px;
    }

    .advanced-coaching-areas {
      padding: 50px 20px;
    }

    .coaching-areas-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 30px;
    }

    .coaching-area-item {
      background: #1a1a1a;
      border: 1px solid #00bcd4;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .coaching-area-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 188, 212, 0.3);
    }

    .coaching-area-item h3 {
      margin-bottom: 15px;
      font-size: 24px;
      color: #00bcd4;
    }

    .coaching-area-item p {
      font-size: 16px;
      color: #cccccc;
    }

    .coaches {
      background: #0d1117;
      padding: 50px 20px;
      margin-top: 50px;
    }

    .coaches h2 {
      color: #00bcd4;
      margin-bottom: 30px;
      text-align: center;
    }

    .coaches-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 40px;
    }

    .coach-card {
      background: #1a1a1a;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    .coach-card img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 15px;
    }

    .coach-card h3 {
      font-size: 24px;
      color: #00bcd4;
    }

    .coach-card p {
      font-size: 16px;
      color: #cccccc;
      margin-bottom: 20px;
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
  <h1>Advanced Volleyball Coaching</h1>
  <p>Push your limits with expert guidance and elevate your performance to new heights.</p>
</header>

<section class="coaching-philosophy container">
  <h2>Our Coaching Philosophy</h2>
  <p>We believe that each player has unique strengths. Our coaches work closely with you to identify areas for growth and challenge you with innovative drills and game strategies. Whether you're perfecting your serve or working on in-game decision-making, our coaching approach is tailored to maximize your potential.</p>
</section>

<section class="advanced-coaching-areas container">
  <h2>Advanced Coaching Areas</h2>
  <p>Our advanced coaching program focuses on refining techniques, game awareness, and mental toughness. Here are the key areas we focus on:</p>

  <div class="coaching-areas-grid">
    <div class="coaching-area-item">
      <h3>Advanced Serving Techniques</h3>
      <p>Learn how to serve with power, precision, and consistency. We focus on strategies for breaking through any defense.</p>
    </div>
    <div class="coaching-area-item">
      <h3>Blocking and Defending</h3>
      <p>Master the art of blocking and defending against the toughest spikes and serves. Timing and anticipation are key.</p>
    </div>
    <div class="coaching-area-item">
      <h3>Offensive Strategies</h3>
      <p>Improve your court awareness, execute effective attacks, and develop advanced offensive plays to outsmart your opponents.</p>
    </div>
    <div class="coaching-area-item">
      <h3>Team Coordination</h3>
      <p>Learn how to communicate effectively with teammates and coordinate your movements to maintain a strong team dynamic during fast-paced games.</p>
    </div>
  </div>
</section>

<section class="coaches container">
  <h2>Meet Our Coaches</h2>
  <div class="coaches-grid">
    <div class="coach-card">
      <img src="coach1.jpg" alt="Coach Image">
      <h3>Coach Mark</h3>
      <p>With 15 years of experience, Coach Mark specializes in offensive strategy and player development. He has trained numerous athletes at the national level.</p>
    </div>
    <div class="coach-card">
      <img src="coach2.jpg" alt="Coach Image">
      <h3>Coach Sarah</h3>
      <p>Coach Sarah is an expert in defensive tactics and mental conditioning. She has helped countless players overcome mental barriers and enhance their game performance.</p>
    </div>
  </div>
</section>

<section class="cta-section">
  <h2>Ready to Take Your Game to the Next Level?</h2>
  <a href="#">Sign Up for Advanced Coaching</a>
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

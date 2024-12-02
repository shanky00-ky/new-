<?php
include ("..\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
  <style>
  body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #1a1a1a;
    color: #e0e0e0;
  }

  h1, h2, h3 {
    color: #ffffff;
    text-align: center;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  header {
    background: linear-gradient(to right, #0d47a1, #1976d2);
    color: #ffffff;
    padding: 30px 20px;
    text-align: center;
    position: relative;
    border-bottom: 3px solid #333;
  }

  header h1 {
    font-size: 40px;
    margin: 0;
    font-weight: 700;
  }
  header {
    background-color: #101820;
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
    background-color: #1976d2;
   
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 18px;
    cursor: pointer;
    text-align: center;
  }

  .navbar .cta-btn:hover {
    background-color: #0d47a1;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    padding: 20px;
  }
  .home-button {
    position: absolute;
    top: 20px;
    left: 20px;
    padding: 12px 24px;
    background-color: #1976d2;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-size: 18px;
    font-weight: 600;
    display: inline-block;
    transition: background-color 0.3s ease, transform 0.3s ease;
    z-index: 10;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  }

  .home-button:hover {
    background-color: #1565c0;
    transform: translateY(-3px);
  }

  .home-button:active {
    transform: translateY(1px);
  }

  .services-section {
    padding: 60px 20px;
    background-color: #121212;
  }

  .services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    margin-top: 40px;
  }

  .service-item {
    background: #2c2c2c;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(30, 144, 255, 0.3);
    padding: 25px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
    overflow: hidden;
  }

  .service-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(30, 144, 255, 0.6);
  }

  .service-item h3 {
    margin-bottom: 20px;
    font-size: 26px;
    color: #1976d2;
  }

  .service-item p {
    font-size: 18px;
    color: #b0b0b0;
    line-height: 1.6;
    margin-bottom: 20px;
  }

  .service-item .learn-more {
    display: inline-block;
    padding: 12px 24px;
    background-color: #1976d2;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 600;
    transition: background-color 0.3s;
  }

  .service-item .learn-more:hover {
    background-color: #1565c0;
  }

  footer {
    background: #121212;
    padding: 25px;
    color: #b0b0b0;
    text-align: center;
    font-size: 16px;
    border-top: 3px solid #333;
  }

  footer a {
    color: #1976d2;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
  }

  footer a:hover {
    color: #0d47a1;
  }
</style>





</head>
<body>

<header class="navbar">
    <h2>Volleyball league</h2>
    <?php
    $sql = 'SELECT * FROM m11_loginpage WHERE m11_status = 1;';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['m11_name'] == 'Logo') {
    ?>
      <div class="logo">
        <img src="content/images/<?= $row['m11_url']; ?>" alt="<?= $row['m11_name']; ?>">
      </div>
    <?php
    
      }
    ?>
    <nav class="nav-links">
      <?php
      $sql = "SELECT * FROM `m11_loginpage`;";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        if (in_array($row['m11_name'] , ['Home','Log in','Signup'])) {
        ?>
          <button onclick="window.location.href='<?= $BASE_URL . $row['m11_url']; ?>'" class="cta-btn">
            <?= isset($row['m11_url']) ? $row['m11_name'] : 'Home'; ?>
          </button>
        <?php
        }
      }
    }
      ?>
    </nav>
  </header>

<section class="services-section">
  <h2>What We Offer</h2>
  <p>Discover the wide range of services we provide to improve your volleyball experience.</p>
  <div class="services-grid">
    <?php 
    $sql = 'SELECT * FROM m06_services where m06_status = 1;';
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      ?>
    <div class="service-item">
      <h3><?php echo $row['m06_name']; ?></h3>
      <p><?php echo $row['m06_para']; ?></p>
      <a href="<?php echo $row['m06_url']?>" class="learn-more"><?php echo $row['m06_h']; ?></a>
    </div>
    <?php
    }
    ?>
  </div>
</section>
<!-- <div class="service-item">
  <h3>League Management</h3>
  <p>Organize and participate in competitive leagues for all skill levels.</p>
  <a href="leaguemanagment.html" class="learn-more">Learn More</a>
</div>
<div class="service-item">
  <h3>Event Planning</h3>
  <p>We help you host exciting volleyball tournaments and events.</p>
  <a href="eventmang.html" class="learn-more">Learn More</a>
</div>
<div class="service-item">
  <h3>Gear Rental</h3>
  <p>Access top-quality volleyball gear and equipment for your games.</p>
  <a href="gearrentel.html" class="learn-more">Learn More</a>
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

</body>
</html>

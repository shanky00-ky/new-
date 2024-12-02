<?php
include("../conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | Volleyball</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #101820;
      color: white;
    }
    header {
      background-color: #101820;
      padding: 20px;
      text-align: center;
    }
    header h2 {
      margin: 0;
      color: #fff;
    }
    header .logo img {
    width: 100px; 
    height: auto; 
    display: inline-block;
    vertical-align: middle; 
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
      background-color: #00796b;
    }
    footer {
      background: #101820;
      color: #ccc;
      text-align: center;
      padding: 10px;
    }
    .container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 15px;
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }
    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      background-color: #1a1a1a;
      transition: transform 0.3s ease-in-out;
    }
    .gallery-item img,
    .gallery-item iframe {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease-in-out;
    }
    .gallery-item:hover {
      transform: scale(1.05);
    }
    .gallery-item:hover img,
    .gallery-item:hover iframe {
      transform: scale(1.1);
    }
  </style>
</head>
<body>

<header>
  <div class="navbar">
    <h2>Volleyball Gallery</h2>
    <?php
    $sql = "SELECT * FROM m11_loginpage WHERE m11_status = 1;";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['m11_name'] == 'Logo') {
                ?>
                <a href="\index.php">
                <div class="logo">
                  <img src="images/<?= ($row['m11_url']); ?>" alt="<?= ($row['m11_name']); ?>" />
                </a>
            </div>
                <?php
            }
        }
    } else {
        echo "<p>No navigation data found.</p>";
    }
    ?>
  </div>
</header>

<div class="container">
  <?php
  $sql = "SELECT * FROM m10_gallerypage WHERE m10_status = 1;";
  $result = mysqli_query($conn, $sql);

  if ($result && mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          if ($row['m10_name'] == 'video') {
              ?>
              <div class="gallery-item video-container">
                <iframe src="<?= ($row['m10_url']); ?>" 
                        title="Volleyball Highlight Video" 
                        allowfullscreen>
                </iframe>
              </div>
              <?php
          } else {
              ?>
              <div class="gallery-item">
                <img src="images/<?= ($row['m10_url']); ?>" 
                     alt="<?= ($row['m10_name']); ?>" />
              </div>
              <?php
          }
      }
  } else {
      echo "<p>No gallery items available.</p>";
  }
  ?>
</div>

<footer>
  <div class="footer-container">
    <?php
    $sql = "SELECT * FROM m08_footer WHERE m08_status = 1;";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['m08_name'] == 'Logo') {
                ?>
                <div class="footer-logo">
                  <img src="images/<?= ($row['m08_url']); ?>" 
                       alt="<?= ($row['m08_name']); ?>" />
                </div>
                <?php
            } elseif ($row['m08_name'] == 'content') {
                ?>
                <div class="footer-content">
                  <p><?= ($row['m08_disc']); ?></p>
                </div>
                <?php
            } elseif (in_array($row['m08_name'], ['Facebook', 'Twitter', 'Instagram'])) {
                ?>
                <div class="footer-social">
                  <a href="<?= ($row['m08_url']); ?>" target="_blank">
                    <?= ($row['m08_name']); ?>
                  </a>
                </div>
                <?php
            } elseif ($row['m08_name'] == 'location') {
                ?>
                <div class="footer-map">
                  <iframe src="<?= ($row['m08_url']); ?>" 
                          width="700" height="350" style="border:0;" 
                          allowfullscreen="" 
                          loading="lazy"></iframe>
                </div>
                <?php
            }
        }
    } 
    ?>
  </div>
</footer>

</body>
</html>

<?php
include(".\conn.php");
session_start();

function addNotification($message, $type) {
    $_SESSION['notifications'][] = ['message' => $message, 'type' => $type];
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $_SESSION['user'] = $username;
    addNotification("Welcome back, $username! You have logged in successfully.", 'success');
}

if (isset($_POST['logout'])) {
    $username = $_SESSION['user'];
    session_destroy();
    addNotification("Goodbye, $username! You have logged out.", 'info');
}

$match_date = '2024-11-30';
$current_date = date('Y-m-d');

if ($match_date == $current_date) {
    addNotification("Reminder: Your volleyball match is today!", 'info');
} elseif (strtotime($match_date) > strtotime($current_date)) {
    addNotification("Upcoming match: Volleyball match on $match_date.", 'info');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volleyball Notifications</title>
    <link rel="stylesheet" href="css/notification.css">
</head>
<body>

<header>
  <header class="navbar">
    <h2>Volleyball League</h2>
    <?php
    $sql = 'SELECT * FROM m11_loginpage WHERE m11_status = 1;';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['m11_name'] == 'Logo') {
    ?>
      <div class="logo">
        <img src="images\<?= $row['m11_url']; ?>" alt="<?= $row['m11_name']; ?>">
        
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
            <?= isset($row['m11_url']) ? $row['m11_name'] : 'Home'; ?>
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
</header>

<section class="notification-container">
    <h2>Recent Notifications</h2>
    <div class="notifications">
        <?php
        if (isset($_SESSION['notifications'])) {
            foreach ($_SESSION['notifications'] as $notification) {
                echo "<div class='notification {$notification['type']}'>
                        {$notification['message']}
                      </div>";
            }
            unset($_SESSION['notifications']);
        }
        ?>
    </div>
</section>



</body>
</html>

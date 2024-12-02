<?php include(".\conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
       
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.admin-header {
    background-color: #333;
    color: white;
    padding: 20px;
    text-align: center;
}

.admin-header nav a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
}

.admin-content {
    padding: 20px;
}

section {
    margin-bottom: 30px;
    padding: 20px;
    background: white;
    border: 1px solid #ccc;
    border-radius: 8px;
}

.stats {
    display: flex;
    gap: 20px;
}

.stats div {
    background-color: #f0f0f0;
    padding: 15px;
    border-radius: 8px;
    text-align: center;
}

button {
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <header class="admin-header">
        <h1>Admin Dashboard</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="admin.html">Admin</a>
            <a href="logout.html">Logout</a>
        </nav>
    </header>
    <main class="admin-content">
   <section class="overview">
            <h2>Overview</h2>
            <div class="stats">
                <div>
                    <h3>Total Users</h3>
                    <p id="total-users">0</p>
                </div>
                <div>
                    <h3>Active Sessions</h3>
                    <p id="active-sessions">0</p>
                </div>
                <div>
                    <h3>Feedback</h3>
                    <p id="total-feedback">0</p>
                </div>
            </div>
        </section>      
        <section>
            <h2>Content Management</h2>
            <button onclick="addContent()">Add New Content</button>
            <button onclick="editContent()">Edit Existing Content</button>
        </section>
        <section>
            <h2>Message</h2>
            <button onclick="viewMessage()">View All Message</button>
            <button onclick="editMessage()">Edit Existing</button>
        </section>
        <section>
            <h2>User Management</h2>
            <button onclick="viewUsers()">View All Users</button>
            <button onclick="manageRoles()">Manage User Roles</button>
        </section>
        <section>
            <h2>Analytics</h2>
            <button onclick="viewTraffic()">View Website Traffic</button>
            <button onclick="viewUsage()">View User Activity</button>
        </section> 
        <section>
            <h2>Notifications</h2>
            <button onclick="viewNotifications()">View All Notifications</button>
            <button onclick="sendAlert()">Send Alert</button>
        </section>
        <section>
            <h2>Settings</h2>
            <button onclick="updateSettings()">Update Website Settings</button>
            <button onclick="manageThemes()">Manage Themes</button>
        </section>
        <section>
            <h2>System Logs</h2>
            <button onclick="viewLogs()">View Logs</button>
            <button onclick="clearLogs()">Clear Logs</button>
        </section>
        <section>
            <h2>Reports</h2>
            <button onclick="generateReport()">Generate Reports</button>
            <button onclick="downloadReport()">Download Reports</button>
        </section>
    </main>
    <footer>
        <div class="footer-container">
          <?php 
          $sql = 'SELECT * FROM m08_footer WHERE m08_status = 1 ;';
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            if ($row['m08_name'] == 'Logo') {
              ?>
              <div class="footer-logo">
                <img src="content/images/<?= $row['m08_url']?>" alt="<?= $row['m08_name']?>" class="logo">
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
        
    <script src=".../script.js"></script>

</body>
</html>

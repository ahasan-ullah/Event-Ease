<?php
if(session_status()===PHP_SESSION_NONE){
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Profile – EventEase</title>
  <link rel="stylesheet" href="../public/styles/profile_page.css"/>
  <link rel="stylesheet" href="../public/styles/navbar.css"/>
  <link rel="stylesheet" href="../public/styles/footer.css"/>
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php 
  include '../views/layouts/navbar.php';
  ?>
  <section class="profile-section">
    <div class="profile-container">
      <?php
      if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
        echo '<h1>Welcome, ' . ($_SESSION['user']['name']) . '!</h1>';
        echo '<p class="user-name">Name: ' . ($_SESSION['user']['name']) . '</p>';
        echo '<p class="user-email">Email: ' . ($_SESSION['user']['email']) . '</p>';
        echo '<p class="user-role">Account Type: ' . ($_SESSION['user']['user_type']) . '</p>';
      }
      ?>
    </div>
  </section>
  <?php include '../views/layouts/footer.php'; ?>
  <script src="../public/scripts/navbar.js"></script>
</body>
</html>
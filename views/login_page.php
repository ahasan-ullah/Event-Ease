<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login | EventEase</title>
  <link rel="stylesheet" href="../public/styles/register_page.css" />
  <link rel="stylesheet" href="../public/styles/navbar.css" />
  <link rel="stylesheet" href="../public/styles/footer.css" />
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php
  include __DIR__ . '/layouts/navbar.php';
  ?>
  <div class="register-container">
    <h2>Create Account</h2>
    <?php
    if (!empty($_SESSION['login_failed'])) {
      echo '<p class="error-msg">' . $_SESSION['login_failed'] . '</p>';
      $_SESSION['login_failed'] = '';
    }
    ?>
    <form action="../controllers/login_controller.php" method="POST">
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" required />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required />
      </div>
      <button type="submit" name="login">Login</button>
      <p>Don't have any account? <a href="../../event-ease/views/register_page.php">Register</a></p>
    </form>
  </div>
  <?php include __DIR__ . '/layouts/footer.php'; ?>
  <script src="../public/scripts/navbar.js"></script>
</body>
</html>
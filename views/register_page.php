<?php
session_start();
$nameErr = $_SESSION['nameErr'] ?? "";
$emailErr = $_SESSION['emailErr'] ?? "";
$passErr = $_SESSION['passErr'] ?? "";
$success = $_SESSION['success'] ?? "";

unset($_SESSION['nameErr'], $_SESSION['emailErr'], $_SESSION['passErr'], $_SESSION['success']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Register | EventEase</title>
  <link rel="stylesheet" href="../public/styles/register_page.css"/>
  <link rel="stylesheet" href="../public/styles/navbar.css"/>
  <link rel="stylesheet" href="../public/styles/footer.css"/>
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php 
    include __DIR__  . '/layouts/navbar.php'; 
  ?>
  <div class="register-container">
    <h2>Create Account</h2>
    <?php if (!empty($success)) echo "<div class='success-message'>$success</div>"; ?>
    <form action="../controllers/register.php" method="POST">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" placeholder="Full Name" required />
        <?php if (!empty($nameErr)) echo "<small style='color:red;'>$nameErr</small>"; ?>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" required />
        <?php if (!empty($emailErr)) echo "<small style='color:red;'>$emailErr</small>"; ?>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required />
        <?php if (!empty($passErr)) echo "<small style='color:red;'>$passErr</small>"; ?>
      </div>
      <button type="submit" name="register">Register</button>
      <p>Already have an account? <a href="../../event-ease/views/login_page.php">Login</a></p>
    </form>
  </div>
  <?php include __DIR__ . '/layouts/footer.php'; ?>
  <script src="../public/scripts/navbar.js"></script>
</body>
</html>
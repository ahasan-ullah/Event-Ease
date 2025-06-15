<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Register | EventEase</title>
  <link rel="stylesheet" href="../public/styles/register_page.css" />
  <link rel="stylesheet" href="../public/styles/navbar.css"/>
  <link rel="stylesheet" href="../public/styles/footer.css"/>
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  include '../views/layouts/navbar.php';
  ?>
  <div class="register-container">
    <h2>Create Account</h2>
    <form action="register.php" method="POST">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" placeholder="Full Name" required />
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" required />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required />
      </div>
      <button type="submit" name="register">Register</button>
      <p>Already have an account? <a href="login.html">Login</a></p>
    </form>
  </div>
  <?php
  include '../views/layouts/footer.php';
  ?>
</body>

</html>
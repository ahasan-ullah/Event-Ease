<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Event Ease</title>
  <link rel="stylesheet" href="public/styles/navbar.css" />
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="social-bar">
    <ul>
      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li class="follow-text">Follow Us</li>
    </ul>
  </div>

  <nav class="navbar">
    <div class="logo">Event<br>Ease</div>
    <div class="nav-links">
      <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Policies</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="btn-container">
      <a href="#" class="login-btn">Login</a>
      <!-- mobile menu button-->
      <div class="mobile-menu-btn" id="mobile-menu-btn">
        <i class="fas fa-bars"></i>
      </div>
      <!-- mobile menu options -->
      <div class="mobile-menu-options hidden" id="mobile-menu-options">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Features</a></li>
          <li><a href="#">Policies</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="public/scripts/navbar.js"></script>
</body>

</html>
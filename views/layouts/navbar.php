<?php
if(session_start()===PHP_SESSION_NONE){
  session_start();
}
?>
<nav class="navbar">
  <div class="logo">Event<br>Ease</div>
  <div class="nav-links">
    <ul>
      <li><a href="../../../event-ease/index.php" class="active">Home</a></li>
      <li><a href="#">Events</a></li>
      <li><a href="#">Features</a></li>
      <li><a href="#">Policies</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </div>
  <div class="btn-container">
    <?php
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
      echo '<button class="profile-btn"  id="profile-btn"><a href="../../../event-ease/views/profile_page.php"><i class="fa fa-user"></i></a></button>';
      echo '<a href="../../../event-ease/controllers/logout.php" class="login-btn">Logout</a>';
    } else {
      echo '<a href="../../../event-ease/views/login_page.php" class="login-btn" id="login-btn">Login</a>';
    }
    ?>
    <!-- mobile menu button-->
    <div class="mobile-menu-btn" id="mobile-menu-btn">
      <i class="fas fa-bars"></i>
    </div>
    <!-- mobile menu options -->
    <div class="mobile-menu-options hidden" id="mobile-menu-options">
      <ul>
        <li><a href="../../../event-ease/index.php" class="active">Home</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Policies</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
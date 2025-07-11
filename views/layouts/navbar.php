<?php
if(session_status()===PHP_SESSION_NONE){
  session_start();
}
$currentPath=$_SERVER['REQUEST_URI'];
?>
<nav class="navbar">
  <div class="logo">Event<br>Ease</div>
  <div class="nav-links">
    <ul>
      <li><a href="../../../event-ease/index.php" class="<?php echo strpos($currentPath, '/event-ease/index.php') !== false ? 'active' : ''; ?>">Home</a></li>
      <li><a href="../../../event-ease/views/events_page.php" class="<?php echo strpos($currentPath, '/event-ease/views/events_page.php') !== false ? 'active' : ''; ?>">Events</a></li>
      <?php
        if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
          echo '<li><a href="../../../event-ease/views/my_events_page.php" class="'.(strpos($currentPath, '/event-ease/views/my_events_page.php') !== false ?'active' : '') .'">My Bookings</a></li>';
        }
      ?>
      <li><a href="../../../event-ease/views/features_page.php" class="<?php echo strpos($currentPath, '/event-ease/views/features_page.php') !== false ? 'active' : ''; ?>">Features</a></li>
      <li><a href="../../../event-ease/views/policies_page.php" class="<?php echo strpos($currentPath, '/event-ease/views/policies_page.php') !== false ? 'active' : ''; ?>">Policies</a></li>
      <li><a href="../../../event-ease/views/contact_us_page.php" class="<?php echo strpos($currentPath, '/event-ease/views/contact_us_page.php') !== false ? 'active' : ''; ?>">Contact Us</a></li>
    </ul>
  </div>
  <div class="btn-container">
    <?php
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
      if($_SESSION['user']['user_type']==='admin'){
        echo '<a href="../../../event-ease/views/admin_dashboard.php" class="login-btn">Admin</a>';
      }
      else{
        echo '<button class="profile-btn"  id="profile-btn"><a href="../../../event-ease/views/profile_page.php"><i class="fa fa-user"></i></a></button>';
      }
      echo '<a href="../../../event-ease/controllers/logout_controller.php" class="login-btn">Logout</a>';
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
        <li><a href="../../../event-ease/index.php" class="<?php echo strpos($currentPath, '/event-ease/index.php') !== false ? 'active' : ''; ?>">Home</a></li>
        <li><a href="../../../event-ease/views/events_page.php" class="<?php echo strpos($currentPath, '/event-ease/views/events_page.php') !== false ? 'active' : ''; ?>">Events</a></li>
        <li><a href="../../../event-ease/views/features_page.php" class="<?php echo strpos($currentPath, '/event-ease/views/features_page.php') !== false ? 'active' : ''; ?>">Features</a></li>
        <li><a href="../../../event-ease/views/policies_page.php" class="<?php echo strpos($currentPath, '/event-ease/views/policies_page.php') !== false ? 'active' : ''; ?>">Policies</a></li>
        <li><a href="../../../event-ease/views/contact_us_page.php" class="<?php echo strpos($currentPath, '/event-ease/views/contact_us_page.php') !== false ? 'active' : ''; ?>">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
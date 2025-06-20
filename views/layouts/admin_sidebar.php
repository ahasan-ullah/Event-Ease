<?php
$currentPath = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard | EventEase</title>
  <link rel="stylesheet" href="../public/styles/admin/admin_sidebar.css" />
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- <?php echo $currentPath ?> -->
  <div class="sidebar">
    <h2 class="sidebar-title">EventEase Admin</h2>
    <ul class="sidebar-menu">
      <li class="<?php echo strpos($currentPath, '/event-ease/views/admin_dashboard.php') !== false ? 'active' : '' ?>"><i class="fas fa-tachometer-alt"></i><a href="../views/admin_dashboard.php">Dashboard</a></li>
      <li class="<?php echo strpos($currentPath, '/event-ease/views/manage_users.php') !== false ? 'active' : '' ?>"><i class="fas fa-layer-group"></i><a href="../views/manage_users.php">Manage Users</a></li>
      <li><i class="fas fa-calendar-alt"></i><a href="#">Manage Events</a></li>
      <li class="<?php echo strpos($currentPath, '/event-ease/views/add_event.php') !== false ? 'active' : '' ?>"><i class="fas fa-users"></i><a href="../views/add_event.php">Add Event</a></li>
      <li><i class="fas fa-home"></i><a href="../index.php">Home</a></li>
      <li><i class="fas fa-cogs"></i><a href="../controllers/logout_controller.php">Logout</a></li>
    </ul>
  </div>
</body>
</html>
<?php
require '../controllers/admin_controller.php';
$usersNumber=totalUsers();
// var_dump($usersNumber);
$eventsNumber=totalEvents();
$bookingsNumber=totalBookings();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../public/styles/admin/admin_dashboard.css">
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php
  include __DIR__ . "/layouts/admin_sidebar.php";
  ?>
  <main class="dashboard-main">
    <h1>Admin Dashboard</h1>
    <div class="dashboard-cards">
      <div class="card">
        <i class="fas fa-users"></i>
        <p>Total Users</p>
        <h2><?php echo $usersNumber?></h2>
      </div>
      <div class="card">
        <i class="fas fa-calendar-alt"></i>
        <p>Total Events</p>
        <h2><?php echo $eventsNumber?></h2>
      </div>
      <div class="card">
        <i class="fas fa-ticket-alt"></i>
        <p>Total Bookings</p>
        <h2><?php echo $bookingsNumber?></h2>
      </div>
    </div>
  </main>
</body>

</html>
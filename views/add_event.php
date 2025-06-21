<?php
$msg=$_GET['msg']??'';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add New Event</title>
  <link rel="stylesheet" href="../public/styles/admin/add_event.css">
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php
  include '../views/layouts/admin_sidebar.php';
  ?>
  <main class="add_event_form">
    <h2>Add New Event</h2>
    <?php
    if($msg){
      echo "<p class='msg'>'$msg'</p>";
    }
    $msg='';
    echo "<script>history.replaceState(null, '', location.pathname);</script>";
    ?>
    <form action="../controllers/add_event_controller.php" method="POST" enctype="multipart/form-data">
      <label>Title</label>
      <input type="text" name="title" required />

      <label>Price (BDT)</label>
      <input type="number" name="price" step="1" required />

      <label>Location</label>
      <input type="text" name="location" required />

      <label>Date</label>
      <input type="date" name="date" required />

      <label>Time</label>
      <input type="text" name="time" placeholder="e.g., 6:30 PM" required />

      <label>Category</label>
      <input type="text" name="category" required />

      <label>Organizer</label>
      <input type="text" name="organizer" required />

      <label>Available Seats</label>
      <input type="number" name="available_seats" min="1" required />

      <label>Image</label>
      <input type="file" name="image" accept="image/*" required />

      <label>Description</label>
      <textarea name="description" rows="4" required></textarea>

      <button type="submit" name="add-event">Add</button>
    </form>
  </main>
</body>

</html>
<?php
include '../controllers/update_event_controller.php';
$msg=$_GET['msg']??'';
$id=$_GET['id'];
// echo $id;
$event=getEvent($id);
// echo var_dump($event);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update Events</title>
  <link rel="stylesheet" href="../public/styles/admin/add_event.css">
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
  <style>
    .show-img{
      border: 1px solid black;
      margin-bottom: 20px;
      border-radius: 12px;
    }
  </style>
</head>
<body>
  <?php
  include '../views/layouts/admin_sidebar.php';
  ?>
  <main class="add_event_form">
    <h2>Update Event</h2>
    <?php
    if($msg){
      echo "<p class='msg'>'$msg'</p>";
    }
    $msg='';
    ?>
    <form <?php echo 'action="../controllers/update_event_controller.php?id=' . $id . '"';?> method="POST" enctype="multipart/form-data">
      <label>Title</label>
      <input type="text" name="title" required value="<?=$event['title']?>"/>

      <label>Price (BDT)</label>
      <input type="number" name="price" step="1" required value="<?=$event['price']?>"/>

      <label>Location</label>
      <input type="text" name="location" required value="<?=$event['location']?>"/>

      <label>Date</label>
      <input type="date" name="date" required value="<?=$event['date']?>"/>

      <label>Time</label>
      <input type="text" name="time" placeholder="e.g., 6:30 PM" required value="<?=$event['time']?>"/>

      <label>Category</label>
      <input type="text" name="category" required value="<?=$event['category']?>"/>

      <label>Organizer</label>
      <input type="text" name="organizer" required value="<?=$event['organizer']?>"/>

      <label>Available Seats</label>
      <input type="number" name="available_seats" min="1" required value="<?=$event['available_seats']?>"/>

      <label>Image</label>
      <input type="file" name="image" accept="image/*"/>
      <img class="show-img" src="<?=$event['image']?>" width="100">

      <label>Description</label>
      <textarea name="description" rows="4" required> <?php echo $event['description']?></textarea>

      <button type="submit" name="event_update">Update</button>
    </form>
  </main>
</body>
</html>
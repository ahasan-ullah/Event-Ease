<?php
include '../models/admin_model.php';
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add-event'])){
  $title = $_POST['title'];
  $price = $_POST['price'];
  $location = $_POST['location'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $category = $_POST['category'];
  $organizer = $_POST['organizer'];
  $available_seats = $_POST['available_seats'];
  $description = $_POST['description'];

  $result=addEvent($title,$price,$location,$date,$time,$category,$organizer,$available_seats,$description);
  if ($result===TRUE) {
    header("Location: ../views/add_event.php?msg='Event added successfully'");
    exit;
  }
  else{
    echo 'failed';
  }
}
?>

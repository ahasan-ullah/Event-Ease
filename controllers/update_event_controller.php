<?php
include '../models/admin_model.php';
function getEvent($id){
  return getEventById($id);
}
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['event_update'])){
  $id=$_GET['id'];
  $title=$_POST['title'];
  $price=$_POST['price'];
  $location=$_POST['location'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $category=$_POST['category'];
  $organizer=$_POST['organizer'];
  $available_seats=$_POST['available_seats'];
  $description=$_POST['description'];

  $result=updateEvent($id,$title,$price,$location,$date,$time,$category,$organizer,$available_seats,$description);
  $msg=$result?"Event details upadated successfully":"Failed to upddate event details";
  header("Location: ../views/manage_events.php?message='$msg'");
}
?>
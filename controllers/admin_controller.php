<?php
include '../models/admin_model.php';

function allUsers(){
  return getAllUsers();
}

if(isset($_GET['user_delete'])){
  $id=$_GET['id'];
  $result=deleteUser($id);
  $msg=$result?"User deleted successfully":"Failed to delete user";
  header("Location: ../views/manage_users.php?message='$msg'");
}

function allEvents(){
  return getAllEvents();
}

if(isset($_GET['event_delete'])){
  $id=$_GET['id'];
  $result=deleteEvent($id);
  $msg=$result?"Event deleted successfully":"Failed to delete event";
  header("Location: ../views/manage_events.php?message='$msg'");
}

function attendeeList(){
  return getAttendeeList();
}

function totalUsers(){
  return getTotalUsers();
}

function totalEvents(){
  return getTotalEvents();
}

function totalBookings(){
  return getTotalBookings();
}
?>
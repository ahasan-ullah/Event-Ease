<?php
include '../models/user_model.php';
include '../models/admin_model.php';
function upcomingEvents(){
  return getUpcomingEvents();
}
function allEvents(){
  return getAllEvents();
}
?>
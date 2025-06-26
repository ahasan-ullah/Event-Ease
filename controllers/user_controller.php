<?php
include __DIR__ . '../../models/user_model.php';
include __DIR__ . '../../models/admin_model.php';
function upcomingEvents(){
  return getUpcomingEvents();
}
function allEvents(){
  return getAllEvents();
}
?>
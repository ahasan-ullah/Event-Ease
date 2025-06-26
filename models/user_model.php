<?php
require __DIR__ . '../../config/db.php';
function getUpcomingEvents(){
  global $conn;
  $sql="select * from events order by date desc limit 6";
  $result=$conn->query($sql);
  $upcomingEvents=[];
  while($row=$result->fetch_assoc()){
    $upcomingEvents[]=$row;
  }
  return $upcomingEvents;
}
?>
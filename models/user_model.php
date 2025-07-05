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
function getFilteredEvents($category,$location,$date){
  global $conn;
  $sql="select * from events where category='$category' and location='$location' and date='$date'";
  $result=$conn->query($sql);
  $filteredEvents = [];
  while ($row=$result->fetch_assoc()){
    $filteredEvents[]=$row;
  }
  return $filteredEvents;
}

function makePayment($eventId,$userId,$num_of_seats,$price,$cardNumber, $cardHolderName){
  global $conn;
  $sql="insert into attendee_list (event_id,user_id, number_of_tickets,price,card_number,card_holder_name) values ('$eventId','$userId','$num_of_seats','$price','$cardNumber','$cardHolderName')";
  $result=$conn->query($sql);
  return $result;
}
function submitQuery($name,$email,$subject,$message){
  global $conn;
  $sql="insert into contact_messages(name,email, subject,message) values ('$name', '$email', '$subject', '$message')";
  $result=$conn->query($sql);
  return $result;
}
function getMyEvents($id){
  global $conn;
  $sql="select a.id, e.title, e.location, e.date, e.time, a.number_of_tickets, a.booking_time from attendee_list a join events e on a.event_id=e.id where a.user_id = $id order by a.booking_time desc";
  $result=$conn->query($sql);
  $myEvents=[];
  while($row=$result->fetch_assoc()){
    $myEvents[]=$row;
  }
  return json_encode($myEvents);
}
?>
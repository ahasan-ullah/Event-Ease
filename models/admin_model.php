<?php
require __DIR__ . '../../config/db.php';

function getAllUsers(){
  global $conn;
  $sql = "select id, name, email, user_type from users where user_type != 'admin'";

  $result = $conn->query($sql);
  $users = [];
  while ($row = $result->fetch_assoc()) {
    $users[] = $row;
  }
  // foreach($users as $user){
  //   echo $user['id'];
  // }
  return $users;
}

function deleteUser($id)
{
  global $conn;
  $sql = "delete from users where id='$id'";
  $result = $conn->query($sql);
  return $result;
}

function addEvent($title,$price,$location,$date,$time,$category,$organizer,$available_seats,$description){
  global $conn;
  $image = $_FILES['image']['name'];
  $tmpName = $_FILES['image']['tmp_name'];
  $uploadDir = '../uploads/';
  $uploadPath = $uploadDir . basename($image);
  move_uploaded_file($tmpName, $uploadPath);

  $sql = "insert into events (title, price, location, date, time, category, organizer, image, description, available_seats) values ('$title', '$price', '$location', '$date', '$time', '$category', '$organizer', '$uploadPath', '$description', '$available_seats')";
  return $conn->query($sql);
}
function getAllEvents(){
  global $conn;
  $sql="select * from events";
  $result=$conn->query($sql);
  $events=[];
  while($row=$result->fetch_assoc()){
    $events[]=$row;
  }
  return $events;
}
function deleteEvent($id){
  global $conn;
  $sql = "delete from events where id='$id'";
  $result = $conn->query($sql);
  return $result;
}
function getEventById($id){
  global $conn;
  $sql="select * from events where id='$id'";
  $result=$conn->query($sql);
  $event=$result->fetch_assoc();
  return $event;
}

function getEventImageDir($id){
  global $conn;
  $sql="select image from events where id='$id'";
  $result=$conn->query($sql);
  if ($result->num_rows > 0) {
    $row=$result->fetch_assoc();
    $imagePath=$row['image'];
    return $imagePath;
  }
  else{
    return "couldn't get image path";
  }
}

function updateEvent($id,$title,$price,$location,$date,$time,$category,$organizer,$available_seats,$description){
  global $conn;
  $uploadPath = '';
  if(!empty($_FILES['image']['name'])) {
    $image = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $uploadDir = '../uploads/';
    $uploadPath = $uploadDir . basename($image);
    move_uploaded_file($tmpName, $uploadPath);
  } else {
    $uploadPath=getEventImageDir($id);
  }
  $sql="update events set title='$title',price='$price',location='$location',date='$date',time='$time',category='$category',organizer='$organizer',available_seats='$available_seats',image='$uploadPath',description='$description' where id=$id";
  $result=$conn->query($sql);
  return $result;
}

function getAttendeeList(){
  global $conn;
  $sql="select a.id,u.name,u.email,e.title,e.location,e.date,a.booking_time,a.number_of_tickets from attendee_list a join users u on a.user_id = u.id join events e on a.event_id = e.id order by a.booking_time desc";
  $result=$conn->query($sql);
  $attendeeList=[];
  while($row=$result->fetch_assoc()){
    $attendeeList[]=$row;
  }
  return $attendeeList;
}
function downloadAttendeeList(){
  $attendeeList=getAttendeeList();

  $fp=fopen('php://output','w');
  $header_line=array("ID","Attendee Name","Email","Event","Location","Event Date","Booked On","Tickets");
  fputcsv($fp,$header_line);
  foreach($attendeeList as $row){
    $line=array($row['id'],$row['name'],$row['email'],$row['title'],$row['location'],$row['date'],$row['booking_time'],$row['number_of_tickets']);
    fputcsv($fp,$line);
  }
  fclose($fp);
  header('Content-type:application/csv');
  header('Content-disposition:attachment;filename="attendee_list.csv"');
}

function getTotalUsers(){
  $users=getAllUsers();
  $usersNumber=0;
  foreach($users as $user){
    $usersNumber++;
  }
  return $usersNumber;
}

function getTotalEvents(){
  $events=getAllEvents();
  $eventsNumber=0;
  foreach($events as $event){
    $eventsNumber++;
  }
  return $eventsNumber;
}

function getTotalBookings(){
  $bookings=getAttendeeList();
  $bookingsNumber=0;
  foreach($bookings as $booking){
    $bookingsNumber++;
  }
  return $bookingsNumber;
}
?>
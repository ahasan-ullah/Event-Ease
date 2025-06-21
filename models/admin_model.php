<?php
require '../config/db.php';

function getAllUsers()
{
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
?>
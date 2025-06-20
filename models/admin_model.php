<?php
require '../config/db.php';

function getAllUsers(){
  $sql = "SELECT id, name, email, user_type FROM users";
  global $conn;
  $result=$conn->query($sql);
  $users=[];
  while($row=$result->fetch_assoc()){
    $users[]=$row;
  }
  // foreach($users as $user){
  //   echo $user['id'];
  // }
  return $users;
}
?>
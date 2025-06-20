<?php
require '../config/db.php';

function getAllUsers(){
  global $conn;
  $sql = "select id, name, email, user_type from users where user_type != 'admin'";

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

function deleteUser($id){
  global $conn;
  $sql = "delete from users where id='$id'";
  $result=$conn->query($sql);
  return $result;
}
?>
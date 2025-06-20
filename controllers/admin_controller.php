<?php
include '../models/admin_model.php';
function allUsers(){
  return getAllUsers();
}
if(isset($_GET['delete'])){
  $id=$_GET['id'];
  $result=deleteUser($id);
  $msg=$result?"User deleted successfully":"Failed to delete user";
  header("Location: ../views/manage_users.php?message='$msg'");
}
?>
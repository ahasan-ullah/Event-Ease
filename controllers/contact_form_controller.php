<?php
include '../models/user_model.php';
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$result=submitQuery($name,$email,$subject,$message);
if($result){
  header('Location: ../views/contact_us_page.php');
}
?>
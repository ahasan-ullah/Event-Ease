<?php
session_start();
include '../config/db.php';

$_SESSION['nameErr'] = $_SESSION['emailErr'] = $_SESSION['passErr'] = $_SESSION['success'] = "";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])){
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $valid = true;
  if (empty($name)) {
    $_SESSION['nameErr'] = "Name is required.";
    $valid = false;
  } elseif (!preg_match("/^[a-zA-Z.\s]+$/", $name)) {
    $_SESSION['nameErr'] = "Only letters, spaces, and dots are allowed.";
    $valid = false;
  }

  if(empty($email)){
    $_SESSION['emailErr'] = "Email is required.";
    $valid = false;
  }
  elseif(!preg_match("/^[\w\-\.]+@([\w-]+\.)+[\w-]{2,4}$/", $email)){
    $_SESSION['emailErr'] = "Invalid email format.";
    $valid = false;
  }
  if(empty($password)){
    $_SESSION['passErr'] = "Password is required.";
    $valid = false;
  }
  elseif(strlen($password) < 6){
    $_SESSION['passErr'] = "Password must be at least 6 characters.";
    $valid = false;
  }
  if ($valid) {
    $check = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($check);

    if ($result->num_rows > 0){
      $_SESSION['emailErr'] = "Email already registered.";
    }
    else{
      $sql = "INSERT INTO users (name, email, password, `user_type`) VALUES ('$name', '$email', '$password', 'normal')";
      if($conn->query($sql) === TRUE){
        $_SESSION['success'] = "Registration successful.";
      }
      else{
        $_SESSION['success'] = "Error: " . $conn->error;
      }
    }
  }
  $conn->close();
  header("Location: ../views/register_page.php");
  exit;
}
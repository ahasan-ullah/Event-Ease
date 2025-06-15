<?php
session_start();
include '../config/db.php';

$_SESSION['emailErr'] = $_SESSION['passErr'] = '';
$_SESSION['login_failed'] = '';
$_SESSION['user'] = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $valid = true;

  if (empty($email)) {
    $_SESSION['emailErr'] = "Email is required.";
    $valid = false;
  } elseif (!preg_match("/^[\w\-\.]+@([\w-]+\.)+[\w-]{2,4}$/", $email)) {
    $_SESSION['emailErr'] = "Invalid email format.";
    $valid = false;
  }

  if (empty($password)) {
    $_SESSION['passErr'] = "Password is required.";
    $valid = false;
  } elseif (strlen($password) < 6) {
    $_SESSION['passErr'] = "Password must be at least 6 characters.";
    $valid = false;
  }

  if ($valid) {
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows>0) {
      $user = $result->fetch_assoc();
      $_SESSION['user']=[
        'id'=>$user['id'],
        'name'=> $user['name'],
        'email'=>$user['email'],
        'user_type'=>$user['user_type']
      ];
      $conn->close();
      header("Location: ../../../../event-ease/index.php");
      exit;
    } else {
      $_SESSION['login_failed'] = "Invalid email or password.";
    }
  }
  $conn->close();
  header("Location: ../views/login_page.php");
  exit;
}

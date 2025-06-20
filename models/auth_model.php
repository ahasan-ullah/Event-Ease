<?php
include '../config/db.php';
$_SESSION['success'] = "";
$_SESSION['login_failed'] = '';
$_SESSION['user'] = [];

function Login($email,$password)
{
  global $conn;
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['user'] = [
      'id' => $user['id'],
      'name' => $user['name'],
      'email' => $user['email'],
      'user_type' => $user['user_type']
    ];
    // $_SESSION['login_failed'] = "Login successful! Welcome " . $_SESSION['user']['name'] . ".";
    if ($_SESSION['user']['user_type'] === 'normal') {
      $conn->close();
      header("Location: ../../../../event-ease/index.php");
      exit;
    } elseif ($_SESSION['user']['user_type'] === 'admin') {
      $conn->close();
      header("Location: ../../../../event-ease/views/admin_dashboard.php");
      exit;
    }
  } else {
    $_SESSION['login_failed'] = "Invalid email or password.";
  }
  $conn->close();
  header("Location: ../views/login_page.php");
  exit;
}

function Register($name, $email, $password)
{
  global $conn;
  $check = "SELECT * FROM users WHERE email = '$email'";
  $result = $conn->query($check);

  if ($result->num_rows > 0) {
    $_SESSION['emailErr'] = "Email already registered.";
  } else {
    $sql = "INSERT INTO users (name, email, password, `user_type`) VALUES ('$name', '$email', '$password', 'normal')";
    if ($conn->query($sql) === TRUE) {
      $_SESSION['success'] = "Registration successful.";
    } else {
      $_SESSION['success'] = "Error: " . $conn->error;
    }
  }
  $conn->close();
  header("Location: ../views/register_page.php");
  exit;
}

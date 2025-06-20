<?php
include '../config/db.php';
$_SESSION['success'] = "";

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

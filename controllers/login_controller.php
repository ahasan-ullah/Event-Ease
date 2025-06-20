<?php
session_start();
include '../models/auth_model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  Login($email,$password);
}
?>
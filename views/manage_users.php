<?php
include '../controllers/admin_controller.php';
$users=allUsers();
// echo var_dump($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Users</title>
  <link rel="stylesheet" href="../public/styles/admin/manage_users.css">
</head>
<body>
  <?php
  include __DIR__ . "/layouts/admin_sidebar.php";
  ?>
  <main class="user-table">
    <h1>Manage Users</h1>
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>User Type</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($users) {
            foreach($users as $user){
              echo "<tr>";
              echo "<td>" . $user["id"] . "</td>";
              echo "<td>" . $user["name"] . "</td>";
              echo "<td>" . $user["email"] . "</td>";
              echo "<td>" . $user["user_type"] . "</td>";
              echo "<td><a class='delete-btn' href='delete_user.php?id=" . $user["id"] . "'>Delete</a></td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='5'>No users found.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>
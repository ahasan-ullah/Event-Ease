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
        
      </table>
  </main>
</body>
</html>
<!-- <?php
include '../controllers/admin_controller.php';
$events=allEvents();
// echo var_dump($events);
$msg=$_GET['message']??'';
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage events</title>
  <link rel="stylesheet" href="../public/styles/admin/manage_users.css">
  <style>
    table{
      max-width: 100%;
      overflow-x: auto;
    }
    table th,td{
      padding: 10px;
    }
  </style>
</head>
<body>
  <?php
  include __DIR__ . "/layouts/admin_sidebar.php";
  ?>
  <main class="event-table">
    <h1>Manage Events</h1>
    <?php
    if($msg){
      echo "<p class='msg'>'$msg'</p>";
    }
    $msg='';
    echo "<script>history.replaceState(null, '', location.pathname);</script>";
    ?>
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Location</th>
            <th>Date</th>
            <th>Time</th>
            <th>Category</th>
            <th>Organizer</th>
            <th>Image</th>
            <th>Description</th>
            <th>Available Seats</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($events) {
            foreach($events as $event){
              echo "<tr>";
              echo "<td>" . $event["id"] . "</td>";
              echo "<td>" . $event["title"] . "</td>";
              echo "<td>" . $event["price"] . "</td>";
              echo "<td>" . $event["location"] . "</td>";
              echo "<td>" . $event["date"] . "</td>";
              echo "<td>" . $event["time"] . "</td>";
              echo "<td>" . $event["category"] . "</td>";
              
              echo "<td>" . $event["organizer"] . "</td>";
              echo '<td><img src='.$event["image"].' width="100"></td>';
              echo "<td>" . $event["description"] . "</td>";
              echo "<td>" . $event["available_seats"] . "</td>";
              echo "<td>
              <div class='btn-container'>
              <a class='delete-btn' href='../controllers/admin_controller.php?event_delete=true&id=" . $event["id"] . "'>Delete</a>
              <a class='update-btn' href='../controllers/admin_controller.php?event_update=true&id=" . $event["id"] . "'>Update</a>
              </div>
              </td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='5'>No events found.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>
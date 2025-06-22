<?php
include '../controllers/admin_controller.php';
$attendees=attendeeList();
// var_dump($attendees);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Attendee List</title>
  <link rel="stylesheet" href="../public/styles/admin/manage_users.css">
  <style>
    table{
      max-width: 100%;
      overflow-x: auto;
    }
    table th,td{
      padding: 10px;
    }
    .header-content{
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .download-btn{
      background: #111;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      font-weight: 500;
      border-radius: 4px;
      border: none;
      outline: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <?php
  include __DIR__ . "/layouts/admin_sidebar.php";
  ?>
  <main class="user-table">
    <div class="header-content">
      <h1>Attendee List</h1>
      <?php
      if($attendees){
        echo "<a href='../controllers/download_csv_controller.php' class='download-btn' id='attendee-list-download'>Download List</a>";
      }
      ?>
    </div>
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Attendee Name</th>
            <th>Email</th>
            <th>Event</th>
            <th>Location</th>
            <th>Event Date</th>
            <th>Booked On</th>
            <th>Tickets</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($attendees) {
            foreach($attendees as $attendee){
              echo "<tr>";
              echo "<td>" . $attendee["id"] . "</td>";
              echo "<td>" . $attendee["name"] . "</td>";
              echo "<td>" . $attendee["email"] . "</td>";
              echo "<td>" . $attendee["title"] . "</td>";
              echo "<td>" . $attendee["location"] . "</td>";
              echo "<td>" . $attendee["date"] . "</td>";
              echo "<td>" . $attendee["booking_time"] . "</td>";
              echo "<td>" . $attendee["number_of_tickets"] . "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='5'>No list found.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>
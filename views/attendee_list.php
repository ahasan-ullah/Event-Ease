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
  </style>
</head>
<body>
  <?php
  include __DIR__ . "/layouts/admin_sidebar.php";
  ?>
  <main class="user-table">
    <h1>Attendee List</h1>
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
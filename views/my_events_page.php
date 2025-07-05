<?php
session_start();
include '../controllers/user_controller.php';
$userId=$_SESSION['user']['id'];
$myEvents=json_decode(myEvents($userId));
// var_dump($myEvents);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Booked Events</title>
  <link rel="stylesheet" href="../public/styles/my_events.css"/>
  <link rel="stylesheet" href="../public/styles/navbar.css">
  <link rel="stylesheet" href="../public/styles/footer.css">
</head>
<body>
  <?php include './layouts/navbar.php'?>
  <section class="container">
    <h2>My Booked Events</h2>
    <table>
      <thead>
        <tr>
          <th>Event Title</th>
          <th>Location</th>
          <th>Date</th>
          <th>Time</th>
          <th>Tickets</th>
          <th>Booked On</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($myEvents as $key=>$value) {
            echo "<tr>
              <td>".$value->title."</td>
              <td>".$value->location."</td>
              <td>".$value->date."</td>
              <td>".$value->time."</td>
              <td>".$value->number_of_tickets."</td>
              <td>".$value->booking_time."</td>
            </tr>";
          }
        ?>
      </tbody>
    </table>
  </section>
  <?php include './layouts/footer.php'?>
</body>
</html>
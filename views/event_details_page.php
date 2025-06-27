<?php
include '../controllers/user_controller.php';
$eventId = $_GET['id'];
$event = eventById($eventId);
$imagePath = str_replace('../', '/event-ease/', $event['image']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($event['title']) ?> | Event Details</title>
  <link rel="stylesheet" href="../public/styles/event_details.css">
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="event-details-container">
    <div class="event-content">
      <div class="event-image">
        <img src="<?= $imagePath ?>" alt="<?= htmlspecialchars($event['title']) ?>">
      </div>
      <div class="event-info">
        <h1><?= htmlspecialchars($event['title']) ?></h1>
        <p class="price">৳ <?= $event['price'] ?></p>
        <p><i class="fa fa-calendar"></i> <?= $event['date'] ?> &nbsp; <i class="fa fa-clock"></i> <?= $event['time'] ?></p>
        <p><i class="fa fa-map-marker-alt"></i> <?= htmlspecialchars($event['location']) ?></p>
        <p><i class="fa fa-users"></i> Available Seats: <?= $event['available_seats'] ?></p>
        <p><i class="fa fa-user"></i> Organized by <?= htmlspecialchars($event['organizer']) ?></p>
        <p><i class="fa fa-tag"></i> Category: <?= htmlspecialchars($event['category']) ?></p>
        <div class="event-description">
          <h3>Description</h3>
          <p><?= nl2br(htmlspecialchars($event['description'])) ?></p>
        </div>
        <a href="book_event.php?id=<?= $event['id'] ?>" class="btn-primary">Book Now</a>
      </div>
    </div>
  </div>
</body>

</html>
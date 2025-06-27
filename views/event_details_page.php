<?php
include '../controllers/user_controller.php';
$eventId = $_GET['id'];
$event = eventById($eventId);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($event['title']) ?> | Event Details</title>
  <link rel="stylesheet" href="../public/styles/navbar.css">
  <link rel="stylesheet" href="../public/styles/event_details.css">
  <link rel="stylesheet" href="../public/styles/footer.css">
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include '../views/layouts/navbar.php'; ?>
  <div class="event-details-container">
    <div class="event-content">
      <div class="event-image">
        <img src="<?php echo $event['image'] ?>" alt="<?php echo $event['title']; ?>">
      </div>
      <div class="event-info">
        <h1><?php echo $event['title']; ?></h1>
        <p class="price">৳ <?php echo $event['price']; ?></p>
        <p><i class="fa fa-calendar"></i> <?php echo $event['date']; ?> &nbsp; <i class="fa fa-clock"></i> <?php echo $event['time']; ?></p>
        <p><i class="fa fa-map-marker-alt"></i> <?php echo$event['location']; ?></p>
        <p><i class="fa fa-users"></i> Available Seats: <?php echo $event['available_seats']; ?></p>
        <p><i class="fa fa-user"></i> Organized by <?php echo $event['organizer']; ?></p>
        <p><i class="fa fa-tag"></i> Category: <?php echo $event['category']; ?></p>
        <div class="event-description">
          <h3>Description</h3>
          <p><?php echo $event['description']; ?></p>
        </div>
        <a href="book_event.php?id=<?php echo $event['id']; ?>" class="book-btn">Book Now</a>
      </div>
    </div>
  </div>
  <?php include '../views/layouts/footer.php'; ?>
</body>
</html>
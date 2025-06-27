<?php
include '../controllers/user_controller.php';
$allEvents=allEvents();
// var_dump($upcomingEvents);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EventEase - Discover Events</title>
  <link rel="stylesheet" href="../public/styles/events.css">
  <link rel="stylesheet" href="../public/styles/navbar.css" />
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../public/styles/footer.css" />
  <style>
    .header{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-bottom: 30px;
    }
    .header p{
      font-size: 20px;
    }
    .header h2{
      font-size: 42px;
    }
  </style>
</head>
<body>
  <?php
  include __DIR__ . '/layouts/navbar.php';
  ?>
  <!-- events section -->
  <section class="upcoming-events">
    <div class="header">
      <p>DISCOVER THE FUN</p>
      <h2>All Events</h2>
    </div>

    <div class="events-grid">
      <!-- event card -->
      <?php
      foreach($allEvents as $event){
        echo '<div class="event-card">
        <a href="./event_details_page.php?id='.$event['id'].'">
          <img src="/event-ease/uploads/'.$event['image'].'" alt='.$event['title'].'>
          <div class="event-info">
          <p class="price">'.$event['price'].'</p>
          <h3>'.$event['title'].'</h3>
          <p><i class="fas fa-calendar"></i>'.$event['date'].'&nbsp; <i class="fas fa-map-marker-alt"></i> '.$event['location'].'</p>
        </div>
        </a>
      </div>';
      }
      ?>
    </div>
  </section>
  <?php
  include __DIR__ . '/layouts/footer.php';
  ?>
  <script src="../public/scripts/navbar.js"></script>
</body>
</html>
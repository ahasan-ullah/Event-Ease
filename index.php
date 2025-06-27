<?php
include __DIR__ . '/controllers/user_controller.php';
$upcomingEvents=upcomingEvents();
// var_dump($upcomingEvents);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EventEase - Discover Events</title>
  <link rel="stylesheet" href="public/styles/landing.css" />
  <link rel="stylesheet" href="public/styles/navbar.css" />
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="public/styles/footer.css" />
</head>
<body>
  <?php
  include __DIR__ . '/views/layouts/navbar.php';
  ?>
  <div class="social-bar">
    <ul>
      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li class="follow-text">Follow Us</li>
    </ul>
  </div>
  <!-- banner Section -->
  <section class="banner">
    <p class="banner-subtitle">ALL THE FUN STARTS HERE</p>
    <h1 class="banner-title">
      Discover <span class="highlight">Events & Tickets</span> around you.
    </h1>
    <!-- search box -->
    <form class="search-box">
      <div class="search-field">
        <p class="label">WHAT</p>
        <select>
          <option>Select Category</option>
          <option>Concert</option>
          <option>Conference</option>
          <option>Sports</option>
          <option>Festival</option>
        </select>
      </div>
      <div class="search-field">
        <p class="label">WHERE</p>
        <select>
          <option>Select Location</option>
          <option>Dhaka</option>
          <option>Chittagong</option>
          <option>Khulna</option>
          <option>Sylhet</option>
        </select>
      </div>
      <div class="search-field">
        <p class="label">WHEN</p>
        <input type="date" />
      </div>
      <div class="search-btn-container">
        <button type="submit" class="search-btn">SEARCH</button>
      </div>
    </form>
  </section>

  <!-- upcoming section -->
  <section class="upcoming-events">
    <div class="events-header">
      <div>
        <p>DISCOVER THE FUN</p>
        <h2>Upcoming Events</h2>
      </div>
      <a href="views/events_page.php" class="view-all-btn">View All</a>
    </div>

    <div class="events-grid">
      <!-- event card -->
      <?php
      foreach($upcomingEvents as $event){
        echo '<div class="event-card">
        <a href="/event-ease/views/event_details_page.php?id='.$event['id'].'">
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

      <!-- <div class="event-card">
        <img src="assets/event-2.jpg" alt="Vibra Mahou Fest">
        <div class="event-info">
          <p class="price">$39 - $1,200</p>
          <h3>Vibra Mahou Fest</h3>
          <p><i class="fas fa-calendar"></i> Jul 16 &nbsp; <i class="fas fa-map-marker-alt"></i> Grant Park, Chicago</p>
        </div>
      </div>
      <div class="event-card">
        <img src="assets/event-3.jpg" alt="Kenny G">
        <div class="event-info">
          <p class="price">$200</p>
          <h3>Kenny G</h3>
          <p><i class="fas fa-calendar"></i> Aug 28 &nbsp; <i class="fas fa-map-marker-alt"></i> Majestic Theatre</p>
        </div>
      </div>
      <div class="event-card">
        <img src="assets/event-4.jpg" alt="Sesame Street Live">
        <div class="event-info">
          <p class="price">$45</p>
          <h3>Sesame Street Live! Make Your Magic</h3>
          <p><i class="fas fa-calendar"></i> Sep 26 &nbsp; <i class="fas fa-map-marker-alt"></i> Grand Chapiteau</p>
        </div>
      </div>
      <div class="event-card">
        <img src="assets/event-5.jpg" alt="Nutcracker Ballet">
        <div class="event-info">
          <p class="price">$60 - $75</p>
          <h3>St. Petersburg Ballet - The Nutcracker</h3>
          <p><i class="fas fa-calendar"></i> Oct 19 &nbsp; <i class="fas fa-map-marker-alt"></i> Majestic Theatre</p>
        </div>
      </div>
      <div class="event-card">
        <img src="assets/event-6.jpg" alt="The Phantom of the Opera">
        <div class="event-info">
          <p class="price">$35 - $99</p>
          <h3>The Phantom of the Opera</h3>
          <p><i class="fas fa-calendar"></i> Nov 28 &nbsp; <i class="fas fa-map-marker-alt"></i> Kings Theatre</p>
        </div>
      </div>
      <div class="event-card">
        <img src="assets/event-7.jpg" alt="Cirque du Soleil Kurios">
        <div class="event-info">
          <p class="price">$49</p>
          <h3>Cirque du Soleil Kurios</h3>
          <p><i class="fas fa-calendar"></i> Dec 26 &nbsp; <i class="fas fa-map-marker-alt"></i> Grand Chapiteau</p>
        </div>
      </div>
      <div class="event-card">
        <img src="assets/event-8.jpg" alt="Cirque du Soleil Kurios">
        <div class="event-info">
          <p class="price">$49</p>
          <h3>Cirque du Soleil Kurios</h3>
          <p><i class="fas fa-calendar"></i> Dec 26 &nbsp; <i class="fas fa-map-marker-alt"></i> Grand Chapiteau</p>
        </div>
      </div> -->
    </div>
  </section>

  <!-- deal section -->
  <section class="deal-section">
    <div class="deal-container">
      <div class="deal-text">
        <h2>Deal of the Day!</h2>
        <p>Register today and get <strong>40% OFF</strong> from your first purchase.</p>
        <a href="#" class="deal-btn">
          Grab The Deal Now <i class="fas fa-arrow-right"></i>
        </a>
      </div>
      <div class="deal-discount">
        <h1>40%</h1>
      </div>
    </div>
  </section>

  <!-- testomonial -->
  <section class="testimonials-section">
    <div class="testimonial-header">
      <p class="subheading">Testimonials</p>
      <h2>Hear From Our Organizers</h2>
    </div>
    <div class="testimonial-cards">
      <div class="testimonial-card">
        <h4>Awesome Support!</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum venenatis neque eget tristique!</p>
        <div class="testimonial-user">
          <img src="assets/review-1.jpg" alt="Alex McQueen" />
          <div>
            <div class="stars">★★★★★</div>
            <strong>Alex MCQUEEN</strong>
            <p>02/15/2020</p>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <h4>Great Features</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum venenatis neque eget tristique!</p>
        <div class="testimonial-user">
          <img src="assets/review-2.jpg" alt="Brittney Barton" />
          <div>
            <div class="stars">★★★★★</div>
            <strong>Brittney BARTON</strong>
            <p>02/15/2020</p>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <h4>Awesome Support!</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum venenatis neque eget tristique!</p>
        <div class="testimonial-user">
          <img src="assets/review-1.jpg" alt="Alex McQueen" />
          <div>
            <div class="stars">★★★★★</div>
            <strong>Alex MCQUEEN</strong>
            <p>02/15/2020</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include __DIR__ . '/views/layouts/footer.php';
  ?>
  <script src="public/scripts/navbar.js"></script>
</body>
</html>
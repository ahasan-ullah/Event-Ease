<?php
include 'views/layouts/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EventEase – Discover Events</title>
  <link rel="stylesheet" href="public/styles/banner.css" />
</head>

<body>
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

    <!-- Search Box -->
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
        <input type="date"/>
      </div>
      <div class="search-btn-container">
        <button type="submit" class="search-btn">SEARCH</button>
      </div>
    </form>
  </section>

</body>

</html>
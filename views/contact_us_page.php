<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us | EventEase</title>
  <link rel="stylesheet" href="../public/styles/navbar.css">
  <link rel="stylesheet" href="../public/styles/contact_us.css">
  <link rel="stylesheet" href="../public/styles/footer.css">
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include './layouts/navbar.php'; ?>
<section class="contact-container">
  <div class="contact-header">
    <h1>Contact Us</h1>
    <p>Have questions, feedback, or partnership ideas? We're here to help!</p>
  </div>
  <div class="contact-wrapper">
    <div class="contact-info">
      <h3>Reach Us At</h3>
      <p><i class="fas fa-map-marker-alt"></i> 123 Event Street, Dhaka, Bangladesh</p>
      <p><i class="fas fa-phone"></i> +880 1234 567890</p>
      <p><i class="fas fa-envelope"></i> support@eventease.com</p>
      <p><i class="fas fa-clock"></i> Mon - Fri: 9:00 AM - 6:00 PM</p>
    </div>
    <div class="contact-form">
      <form action="../controllers/contact_form_controller.php" method="POST">
        <div class="form-group">
          <label><i class="fas fa-user"></i> Full Name</label>
          <input type="text" name="name" required placeholder="Your Name">
        </div>
        <div class="form-group">
          <label><i class="fas fa-envelope"></i> Email Address</label>
          <input type="email" name="email" required placeholder="you@example.com">
        </div>
        <div class="form-group">
          <label><i class="fas fa-tag"></i> Subject</label>
          <input type="text" name="subject" required placeholder="Subject">
        </div>
        <div class="form-group">
          <label><i class="fas fa-comment-dots"></i> Message</label>
          <textarea name="message" rows="5" required placeholder="Write your message here..."></textarea>
        </div>
        <button type="submit" class="btn-primary">Send Message</button>
      </form>
    </div>
  </div>
</section>
<?php include './layouts/footer.php'; ?>
</body>
</html>

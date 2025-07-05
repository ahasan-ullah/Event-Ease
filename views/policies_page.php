<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Policies | EventEase</title>
  <link rel="stylesheet" href="../public/styles/navbar.css">
  <link rel="stylesheet" href="../public/styles/policies.css">
  <link rel="stylesheet" href="../public/styles/footer.css">
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include './layouts/navbar.php'; ?>
<section class="policies-container">
  <div class="policies-header">
    <h1>Our Policies</h1>
    <p>Transparency and trust are at the core of EventEase.</p>
  </div>

  <div class="accordion-item">
    <button class="accordion-header"><i class="fas fa-user-shield"></i> Terms of Use</button>
    <div class="accordion-body">
      <p>By using EventEase, you agree to abide by our platform rules. Unauthorized access or data misuse is strictly prohibited.</p>
    </div>
  </div>

  <div class="accordion-item">
    <button class="accordion-header"><i class="fas fa-lock"></i> Privacy Policy</button>
    <div class="accordion-body">
      <p>We respect your privacy. Your data is securely stored and will never be shared with third parties without consent.</p>
    </div>
  </div>

  <div class="accordion-item">
    <button class="accordion-header"><i class="fas fa-ticket-alt"></i> Booking Policy</button>
    <div class="accordion-body">
      <p>All bookings are confirmed via email. Tickets are non-transferable and must be presented during event entry.</p>
    </div>
  </div>

  <div class="accordion-item">
    <button class="accordion-header"><i class="fas fa-sync-alt"></i> Cancellation & Refund</button>
    <div class="accordion-body">
      <p>Refunds are only applicable within 24 hours of booking and not less than 48 hours before the event.</p>
    </div>
  </div>

  <div class="accordion-item">
    <button class="accordion-header"><i class="fas fa-headset"></i> Support & Contact</button>
    <div class="accordion-body">
      <p>Need help? Reach out to us at <a href="mailto:support@eventease.com">support@eventease.com</a> or call +880 1234 567890.</p>
    </div>
  </div>
</section>
<?php include './layouts/footer.php'; ?>
<script src="../public/scripts/policies.js"></script>
</body>
</html>

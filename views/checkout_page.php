<?php
session_start();
include '../controllers/user_controller.php';

$user = $_SESSION['user'];
$eventId = $_GET['id'];
$event = eventById($eventId);
$totalPrice=$event['price'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout | <?php echo $event['title'] ?></title>
  <link rel="stylesheet" href="../public/styles/checkout.css">
  <script src="https://kit.fontawesome.com/8f7b27f9d3.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="back-btn-container">
    <a href='./event_details_page.php?id=<?php echo $eventId?>' class="back-btn">Back</a>
  </div>
  <section>
    <h2>Checkout</h2>
    <div class="checkout-container">
      <div class="details-section">
        <div class="user-info">
          <h3>User Information</h3>
          <label>Name</label>
          <input type="text" value="<?php echo $user['name']?>" readonly>
          <label>Email</label>
          <input type="email" value="<?php echo $user['email']?>" readonly>
        </div>

        <div class="event-info">
          <h3>Event Details</h3>
          <label>Title</label>
          <input type="text" value="<?php echo $event['title']?>" readonly>
          <label>Date</label>
          <input type="text" value="<?php echo $event['date']?>" readonly>
          <label>Price per Seat</label>
          <input type="text" value="<?php echo $event['price']?>" readonly>
        </div>

        <div class="seat-selector">
          <h3>Seats</h3>
          <div class="seat-input">
            <button class="seat-btn">-</button>
            <input type="number" id="seats" name="seats" value="1" min="1"/>
            <button class="seat-btn">+</button>
          </div>
          <p>Total: ৳<span id="total"><?php echo $totalPrice?></span></p>
        </div>
      </div>

      <div class="payment-section">
        <h3>Payment</h3>
        <form action="" method="POST">
          <input type="hidden" name="event_id" value="<?php echo $event['id']?>">
          <input type="hidden" name="user_id" value="<?php echo $user['id']?>">
          <input type="hidden" name="price" value="<?php echo $totalPrice?>">

          <label>Card Number</label>
          <input type="text" name="card_number" required placeholder="1234 5678 9012 3456">
          <label>Expiration Date</label>
          <input type="text" name="expiry" required placeholder="MM/YY">
          <label>CVV</label>
          <input type="text" name="cvv" required placeholder="123">
          <label>Card Holder Name</label>
          <input type="text" name="card_name" required placeholder="Full Name">
          <button type="submit" class="btn-primary">Pay Now</button>
        </form>
      </div>
    </div>

</body>

</html>
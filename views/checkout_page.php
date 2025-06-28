<?php
session_start();
include '../controllers/user_controller.php';

$user=$_SESSION['user'];
$eventId=$_GET['id'];
$event=eventById($eventId);
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
    <a href='./event_details_page.php?id=<?php echo $eventId ?>' class="back-btn">Back</a>
  </div>
  <section>
    <h2>Checkout</h2>
    <div class="checkout-container">
      <div class="details-section">
        <div class="user-info">
          <h3>User Information</h3>
          <label>Name</label>
          <input type="text" value="<?php echo $user['name'] ?>" readonly>
          <label>Email</label>
          <input type="email" value="<?php echo $user['email'] ?>" readonly>
        </div>

        <div class="event-info">
          <h3>Event Details</h3>
          <label>Title</label>
          <input type="text" value="<?php echo $event['title'] ?>" readonly>
          <label>Date</label>
          <input type="text" value="<?php echo $event['date'] ?>" readonly>
          <label>Price per Seat</label>
          <input type="text" value="<?php echo $event['price'] ?>" readonly>
        </div>

        <div class="seat-selector">
          <h3>Seats</h3>
          <div class="seat-input">
            <button class="seat-btn" onclick="updateSeats(-1)">-</button>
            <input type="number" id="seats" name="seats" value="1" min="1" onchange="calculateTotal()"/>
            <button class="seat-btn" onclick="updateSeats(1)">+</button>
          </div>
          <p>Total: ৳<span id="total"><?php echo $event['price'] ?></span></p>
        </div>
      </div>

      <div class="payment-section">
        <h3>Payment</h3>
        <form action="../controllers/checkout_controller.php" method="POST">
          <input type="hidden" name="event_id" value="<?php echo $event['id']?>">
          <input type="hidden" name="user_id" value="<?php echo $user['id']?>">
          <input type="hidden" name="price" value="<?php echo $event['price']?>">
          <input type="hidden" name="ticket_nums" value="1" id="ticket_nums">

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
    <script>
      function updateSeats(amount) {
        const seatInput=document.getElementById("seats");
        let seats=parseInt(seatInput.value)+amount;
        if(seats<1) seats=1;
        seatInput.value = seats;
        calculateTotal();
      }
      function calculateTotal(){
        const seats=parseInt(document.getElementById("seats").value);
        document.getElementById("ticket_nums").value=seats;
        const price=<?php echo $event['price'] ?>;
        document.getElementById("total").innerText = (seats*price).toFixed(2);
        document.querySelector('input[name="price"]').value=(seats*price).toFixed(2);
      }
    </script>
</body>

</html>
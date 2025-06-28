<?php
$success=$_GET['success'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Message</title>
  <link rel="stylesheet" href="../public/styles/payment_message.css">
</head>
<body>
  <?php
  if($success==='true'){
    echo '
      <section>
      <h1>Thank you for booking</h1>
      <p>Payment successfull</p>
      <img src="../assets/success-img.png" alt="">
      <a href="../views/events_page.php" class="back-btn">Back</a>
      </section>
    ';
  }
  else{
    echo '
      <section>
      <h1>Please re-book event</h1>
      <p>Payment Error</p>
      <img src="../assets/error-img.jpg" alt="">
      <a href="../views/events_page.php" class="back-btn">Back</a>
      </section>
    ';
  }
  ?>
</body>
</html>
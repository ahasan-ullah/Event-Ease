<?php
include '../models/user_model.php';
$eventId=$_POST['event_id'];
$userId=$_POST['user_id'];
$num_of_seats=$_POST['ticket_nums'];
$price=$_POST['price'];
$cardNumber=$_POST['card_number'];
$cardHolderName=$_POST['card_name'];
makePayment($eventId,$userId,$num_of_seats,$price,$cardNumber, $cardHolderName);
?>
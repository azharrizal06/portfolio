<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  $headers = "From: azharrizal06@gmail.com";
  mail($to, $subject, $message, $headers);
  echo "Email terkirim!";
}
?>

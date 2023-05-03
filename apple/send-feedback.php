<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "amagwka@gmail.com"; 
  $headers = "From: " . $name . " <" . $email . ">\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

  mail($to, $subject, $message, $headers);

  echo "Thank you for your feedback! ,_,";
}
?>
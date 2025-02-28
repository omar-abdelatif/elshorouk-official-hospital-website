<?php
$to = "info@elsheroukhospitals.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: no-reply@elsheroukhospitals.com\r\n";

if (mail($to, $subject, $message, $headers)) {
  echo "Mail sent successfully.";
} else {
  echo "Mail failed.";
}

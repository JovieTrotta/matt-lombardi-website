<?php
  $name = $_POST['name'];
  $visitor_email = $POST['email'];
  $message = $_POST['message'];

  $email_from = 'website_visitor@gmail.com';

  $email_subject = "Website Form Submission";

  $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

  $to = "belmont.matt@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers = "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
  header("Location: index.html");

 ?>

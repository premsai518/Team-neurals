<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$query = $_POST['query'];
$message = _POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$emai_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
               "User query: $query.\n".
                "User message: $message.\n";

$to = 'krishnapakkurthi456@gmail.com';

$headers = "Frpm: $email_from \r\n";
$headers.= "Reply-To: $visitor_email \r\n"

mail($to, $email_subject, $email_body,$headers);

header("location: contact.html");
?>
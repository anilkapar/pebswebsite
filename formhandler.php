<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'anilkapar9826@gmail.com';

$email_subject = 'New Foem Submission';

$email_body ="User Name : $name.\n".
            "User Email : $visitor_email.\n".
            "Subject : $subject.\n".
            "User Message : $message.\n";

$to ='manishkapar9862@gmail.com';

$headers = "From : $email_from \r\n";

$headers .="Reply-To : $visitor_email \r\n";

email($to,$email_subject,$email_body,$headers);

header("Location: contact.html");






?>
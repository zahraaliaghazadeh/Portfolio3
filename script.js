
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];



  $to = "yourname@yourwebsite.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);




$to = "name1@website-name.com, name2@website-name.com,name3@website-name.com";

mail($to,$email_subject,$email_body,$headers);



$to = "name1@website-name.com, name2@website-name.com,name3@website-name.com";

$headers = "From: $email_from \r\n";


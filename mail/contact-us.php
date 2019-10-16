<?php
// Check for empty fields
if (empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['message']))
   {
    echo "Some error occurred";
    return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$recipients = array(
  "soubhagyamishra8984@gmail.com"
);

$to = implode(',', $recipients);
$email_subject = "TheNextPage Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
$headers = "From: info@thenextpage.biz\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $email";
   
mail($to, $email_subject, $email_body, $headers);
return true;         
?>

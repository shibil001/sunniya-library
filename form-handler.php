<? php
$name = $_POST['name'];    
$visitor_email = $_POST['email']; 
$Subject = $_POST['subject']; 
$message = $_POST['message'];  

$email_form = 'sanushibil99@gmial.com';
$email_subject = 'New massages';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $Subject.\n".
              "User Massage: $massage.\n";


$to = 'ishibilrahman@gmail.com';

$headers = "From: $email_from \r\n";
 
$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")
              


?>
<?php
//get data from form  
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['emailinfo'];
$message = $_POST['comments'];
$phone = $_POST['phonenumber'];
$to = "opensourcelover007@gmail.com";
$subject = 'From Website';
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>
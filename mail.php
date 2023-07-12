
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$message = $_POST['message'];
$to = "admin@ba-consulting.co.za"; 
$subject = "Schedule Meeting";
$headers = "From: ".$name. "\r\n" .

$txt = "You have received an email from ".$name ."\r\nEmail: " .$email ."\r\nMessage: ". $message ."\r\n".$name ."\r\n requested for an appointment on ".$date;

if($email=!null){
    mail($to, $subject, $txt, $headers);
}
header('Location:thankyoupage.html');


?>
<?php
$to = "imfaithangelou@gmail.com";
$subject = $_POST('portfolio-contact-subject');

$message = $_POST('portfolio-contact-message');

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <$_POST('portfolio-contact-email')>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

$send = mail($to,$subject,$message,$headers;

if ($send == TRUE) {
	echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
else {
	echo "<script type='text/javascript'>alert('failed!')</script>";
}
?>
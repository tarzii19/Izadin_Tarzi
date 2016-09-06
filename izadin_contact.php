<?php

$name = $_POST ['name'];
$email = $_POST ['email'];
$message = $_POST ['message'];
$to = "tarzii@uni.coventry.ac.uk"
$subject = "New Message from Izadin's Website"

mail ($to, $subject, $message, "From: " . $name);
echo "Thank You for contacting me and I will get back to you very soon";

?>

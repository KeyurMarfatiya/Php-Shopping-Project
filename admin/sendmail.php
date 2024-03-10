<?php
$to = "kmodi2593@gmail.com.com";
$subject = "Test email";
$message = "This is a test email sent using PHP's mail() function.";

$headers = "From: keyurmarfatiya.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "CC: another@example.com\r\n";
$headers .= "BCC: hidden@example.com\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["contact-name"];
    $phone = $_POST["contact-phone"];
    $email = $_POST["contact-email"];
    $subject = $_POST["subject"];
    $message = $_POST["contact-message"];

    // Email configuration
    $to = "aselagayan1010@gmail.com";
    $headers = "From: $email";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email sent successfully. Thank you!";
    } else {
        echo "Error sending email. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>

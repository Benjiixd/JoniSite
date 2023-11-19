<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the fields are set and not empty
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // The email address where you want to receive the form submissions
    $to = 'smileben2012@gmail.com';

    // Subject of the email message
    $subject = 'New Contact Form Submission';

    // Email headers
    $headers = "From: smileben2012@gmail.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email message content
    $email_content = "You have received a new message from the contact form on your website.\n\n";
    $email_content .= "Full Name: $fullname\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    // Sending the email
    if(mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for contacting us. We will be in touch with you very soon.";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}
?>
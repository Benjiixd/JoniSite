<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the fields are set and not empty
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : 'Not provided';
    $email = isset($_POST['email']) ? $_POST['email'] : 'Not provided';
    $message = isset($_POST['message']) ? $_POST['message'] : 'Not provided';

    // Prepare the output string
    $output = "Received the following submission:\n";
    $output .= "Full Name: " . $fullname . "\n";
    $output .= "Email: " . $email . "\n";
    $output .= "Message: " . $message . "\n";

    // For demonstration purposes, we'll just echo the output.
    // In a real application, you might write to a database, send an email, etc.
    echo nl2br($output);
}
?>
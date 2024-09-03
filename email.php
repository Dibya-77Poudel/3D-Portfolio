<?php
// Retrieve form data
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$message = $_POST["message"];

// Check if any input field is empty
if (empty($fullname) || empty($email) || empty($message)) {
    echo "Please fill out all fields.";
} else {
    // Send email
    $to = "mijashpoudel7@gmail.com";
    $subject = "mijash portfolio";
    $headers = "From: $fullname <$email>";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "<script type='text/javascript'>alert('Your message was sent successfully.'); window.history.back();</script>";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Compose email message
    $to = "Davistopia@consultant.com"; 
    $subject = "New Message from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>

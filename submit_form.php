<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $county = $_POST['county'];
    $subject = $_POST['subject'];

    // Email settings
    $to = "d23126388@mytudublin.ie"; // my college email
    $subject_email = "Contact Form Submission: $firstname $lastname";
    $message = "First Name: $firstname\n";
    $message .= "Last Name: $lastname\n";
    $message .= "County: $county\n";
    $message .= "Message: $subject";

    // Headers for email
    $headers = "From: d23126388@mytudublin.ie"; 

    // Send the email
    if (mail($to, $subject_email, $message, $headers)) {
        // Redirect back to the homepage after successful form submission
        header("kendo/index.html");
        exit(); 
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>


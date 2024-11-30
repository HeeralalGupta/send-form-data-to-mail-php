<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Email configuration
    $to = "hiralaldeveloer@gmail.com";
    $email_subject = "New Message From Pland & Go Travell: $subject";
    $email_body = "You have received a new message from your website Pland & Go Travell.\n\n" .
                  "Here are the details:\n\n" .
                  "Name: $name\n" .
                  "Email: $email\n" .
                  "Phone: $phone\n" .
                  "City: $city\n" .
                  "Subject: $subject\n\n" .
                  "Message:\n$message";

    // Send the email
    mail($to, $email_subject, $email_body);
    header("Location: contact.html");
}
?>
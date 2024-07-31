<?php
session_start();

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Custom message
    $customMessage = "Hello " . $name . ",\n\n";
    $customMessage .= "Thank you for reaching out to us.\n\nWe have received your message:\n";
    $customMessage .= "\"" . $message . "\"\n\n";
    $customMessage .= "We will get back to you shortly.\n\n";
    $customMessage .= "Best Regards,\nTeam Konnexio";

    $message = $customMessage;

    // Email recipients
    $to = $email;
    $cc = "saikat.datta16@gmail.com";
    $headers = "From: biafalconsynergy2024@gmail.com\r\n";
    $headers .= "Cc: " . $cc . "\r\n";
    
    if(mail($to, $subject, $message, $headers)) {
        $_SESSION['message'] = "Email Sent";
        //echo "Email Sent";
    }
    else {
        $_SESSION['message'] = "Email Sending Failed";
        //echo "Email Sending Failed";
    }
    header("Location: contact.php");
    exit();
}
?>
<?php
if(isset($_POST['submit'])){
    // Collect form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Email details
    $to = "paridhiagarwal.official@gmail.com"; // Your email address
    $subject = "New Message from $firstname $lastname";
    $body = "You have received a new message from $firstname $lastname ($email):\n\n$message";
    $headers = "From: $email";

    // Send email
    if(mail($to, $subject, $body, $headers)){
        echo "<script>alert('Message sent successfully!');</script>";
    } else{
        echo "<script>alert('Message could not be sent. Please try again later.');</script>";
    }
}
if(!isset($_POST['submit'])) {
    echo "error; you need to submit the form!";
}
?>

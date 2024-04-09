<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate OTP
    $otp = rand(100000, 999999); // Generate a random 6-digit OTP

    // Store OTP in session
    $_SESSION["otp"] = $otp;

    // Email the OTP to the user
    $to = "ajay030320@gmail.com"; // Replace with the user's email
    $subject = "Your OTP for Verification";
    $message = "Your OTP is: $otp";
    $headers = "From: ajay030320@gmail.com"; // Replace with your email address
    // Uncomment the line below to send the email
    mail($to, $subject, $message, $headers);

    // Redirect to OTP verification page
    header("Location: enter_otp.php");
    exit();
} else {
    // If the request method is not POST, redirect to the form page
    header("Location: index.html");
    exit();
}
?>

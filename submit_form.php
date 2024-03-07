<?php
session_start(); // Start the session
require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;

// Set SMTP server and port for Gmail
$mail = new PHPMailer; 
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

// Set your Gmail credentials
$mail->Username = 'kashishhotels4@gmail.com';
$mail->Password = 'dwuieuwbzpznkpsk';

// Retrieve form data
$arrivalDate = $_POST["arrival_date"];
$departureDate = $_POST["departure_date"];
$room = $_POST["room"];
$guests = $_POST["guests"];
$email = $_POST["email"];
$messageContent = $_POST["message"];
$template = file_get_contents('email_template.html');

// Replace placeholders with dynamic content
$template = str_replace('{arrival_date}', $arrivalDate, $template);
$template = str_replace('{departure_date}', $departureDate, $template);
$template = str_replace('{room}', $room, $template);
$template = str_replace('{guest}', $guests, $template);
$template = str_replace('{client_email}', $email, $template);
$template = str_replace('{message}', $messageContent, $template);


// Validate form data (you can add more validation as needed)
if (empty($arrivalDate) || empty($departureDate) || empty($room) || empty($guests) || empty($email) || empty($messageContent)) {
    // Handle validation errors
    $_SESSION['message'] = "Please fill in all fields.";
} else {
    // Form data is valid, process it further (e.g., send email, save to database, etc.)
    // Example: Send email
    $mail->addAddress($email); // Set recipient email address
    $mail->isHTML(true);
    $subject = "Enquiry from Kashish Hotels Website";
    $mail->Subject = $subject;
    $mail->Body = $template;

    if ($mail->send()) {
        $_SESSION['message'] = "Your enquiry has been submitted successfully. We will get back to you soon.";
    } else {
        $_SESSION['message'] = "Failed to submit enquiry. Please try again later.";
    }
}


// Redirect back to the previous page
header("Location: {$_SERVER['HTTP_REFERER']}");
exit();
?>
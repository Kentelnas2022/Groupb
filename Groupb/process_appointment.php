<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $appointmentDate = $_POST["appointmentDate"];
    $appointmentTime = $_POST["appointmentTime"];
    $reason = $_POST["reason"];

    // Process and store appointment information as needed
    // You might want to store this information in a database or send it via email

    // Send email confirmation
    $to = "recipient@example.com"; // Change this to the recipient's email address
    $subject = "Appointment Confirmation";
    $message = "Your appointment has been scheduled.\n\n";
    $message .= "Date: $appointmentDate\n";
    $message .= "Time: $appointmentTime\n";
    $message .= "Reason: $reason\n";

    mail($to, $subject, $message);

    // Redirect back to the dashboard
    header("Location: user_dashboard.php");
    exit;
}
?>

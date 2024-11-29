<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting the data from the form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Setting up email details
    $to = "ayomideojiks123@gmail.com";  // Replace with your actual email
    $email_subject = "Contact Form Submission: " . $subject;
    $email_body = "You have received a new message from $name.\n\n".
                  "Here are the details:\n".
                  "Phone: $phone\n".
                  "Email: $email\n".
                  "Subject: $subject\n".
                  "Message: $message\n";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Sending the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again.";
    }
}
?>

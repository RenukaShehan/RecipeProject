<?php
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $recipeName = $_POST["recipe-name"];
    $feedback = $_POST["feedback"];

    // Validate and sanitize the data (you may want to add more validation)
    $recipeName = htmlspecialchars(trim($recipeName));
    $feedback = htmlspecialchars(trim($feedback));

    // Create a message to be sent in the email
    $message = "Recipe Name: $recipeName\nFeedback/Question: $feedback";

    // Define the recipient email address
    $to = "renukashehan111@gmail.com";

    // Define the subject of the email
    $subject = "New Recipe Feedback";

    // Additional headers
    $headers = "From: webmaster@example.com"; // Replace with your email or leave it blank

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect back to the feedback page or another confirmation page
    header("Location: feedback.html");
    exit();
}

?>

?>
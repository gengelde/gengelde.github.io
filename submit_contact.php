<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Format the data
    $formattedData = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Message: " . $message . "\n\n";

    // Specify the file path
    $filePath = "contact_data.txt";

    // Open the file in append mode
    $file = fopen($filePath, "a");

    // Write the data to the file
    fwrite($file, $formattedData);

    // Close the file
    fclose($file);

    // For demonstration purposes, you can redirect to a thank you page
    header("Location: contact.html");
    exit();
} else {
    // Redirect to the contact page if accessed directly without a POST request
    header("Location: contact.html");
    exit();
}
?>
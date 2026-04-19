<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Basic PHP Validation required by the assignment
    if (empty($name) || empty($email) || empty($message)) {
        echo "<h1>Error: All fields are required!</h1>";
        echo "<a href='index.php'>Go Back</a>";
        exit;
    }

    // If successful, redirect to thank you page
    header("Location: thank-you.html");
    exit;
} else {
    // Prevent direct access to this file
    header("Location: index.php");
    exit;
}
?>

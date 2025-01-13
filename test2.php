<?php
// Check if the form was submitted using POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];


    // Validate the data (basic example)
    if (!empty($name) && !empty($email)) {
        // Send a response
        echo "<h1>Data Received</h1>";
        echo "<p>Name: " . htmlspecialchars($name) . "</p>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    } else {
        echo "Invalid input. Please fill all fields.";
    }
} else {
    echo "Invalid request method.";
}
?>

<?php
// Database credentials
$servername = "localhost"; // or use the server name provided by 000webhost
$username = "id21510027_wp_c0da15192eca886193fa4d1c08e8e5f6"; // replace with your database username
$password = "JoHandyman+2024"; // replace with your database password
$dbname = "id21510027_wp_c0da15192eca886193fa4d1c08e8e5f6"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize input
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

// Execute the statement
if ($stmt->execute()) {
    echo "Message sent successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>

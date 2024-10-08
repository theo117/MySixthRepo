<?php
// Database credentials
$servername = "localhost";
$username = "id21510027_wp_c0da15192eca886193fa4d1c08e8e5f6";
$password = "JoHandyman+2024";
$dbname = "id21510027_wp_c0da15192eca886193fa4d1c08e8e5f6";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize input
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$service = htmlspecialchars($_POST['service']);
$details = htmlspecialchars($_POST['details']);
$date = htmlspecialchars($_POST['date']);
$time = htmlspecialchars($_POST['time']);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO appointments (name, email, phone, service, details, appointment_date, appointment_time) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $name, $email, $phone, $service, $details, $date, $time);

// Execute the statement
if ($stmt->execute()) {
    echo "Appointment booked successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>

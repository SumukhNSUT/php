<?php
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "hospital_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO patients (name, age, gender, disease) VALUES (?, ?, ?, ?)");
$stmt->bind_param("siss", $name, $age, $gender, $disease);

// Set parameters and execute
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$disease = $_POST['disease'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
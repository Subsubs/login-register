<?php
session_start();

// Database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "login_register";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the id from the URL
$id = $_GET['id'];

// Prepare the SQL statement
$sql = "DELETE FROM faculty WHERE id=?";

// Create a prepared statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("i", $id);

// Execute the statement
if ($stmt->execute()) {
    // Redirect back to the admin panel
    header("Location: faculty_list.php");
    exit();
} else {
    echo "Error deleting user: " . $stmt->error;
}

// Close the statement and the connection
$stmt->close();
$conn->close();
?>
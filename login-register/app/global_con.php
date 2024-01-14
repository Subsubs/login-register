<?php

session_start();

// Check if the user is not logged in
if (!isset($_COOKIE["any_user"]) || !isset($_COOKIE["any_user"])) {
    header("Location: login.php"); // Redirect to the login page
    exit();
}

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

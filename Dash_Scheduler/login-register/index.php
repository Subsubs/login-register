
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

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="icon" href="img/Dash1.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DASH Dashboard</title>
  <link rel="stylesheet" type="text/css" href="css3/style.css">
  <link rel="stylesheet" type="text/css" href="css3/print.css" media="print">
</head>

<body>
  <div class="mytabs">
    <?php include("components/faculty_schedule.php"); ?>
	</div>
</body>
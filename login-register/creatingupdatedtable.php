<?php

session_start();

// Initialization (executed once upon script access)
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "login_register";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Button Action Handler (executed only when triggered by AJAX request)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST["create_table"]) && $_POST["create_table"] === "true") {
    // Create the new table
    $sql = "CREATE TABLE sched_updated1 LIKE sched";
    if ($conn->query($sql) === TRUE) {
      echo "Table created successfully";

      // Insert data into the new table (replace "filteredvalue" with your actual filter logic)
      $sql = "INSERT INTO sched_updated1 SELECT * FROM sched WHERE faculty_id = 8";
      if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
      } else {
        echo "Error inserting data: " . $conn->error;
      }
    } else {
      echo "Error creating table: " . $conn->error;
    }
  }
}

$conn->close();
?>


<button id="create-table-button">Create Updated Table</button>



<script> 
function createUpdatedTable() {
  const xhr = new XMLHttpRequest(); // Or use the Fetch API
  xhr.open("POST", "creatingupdatedtable.php"); // Replace with your PHP script's URL
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // Add this header for POST requests
  xhr.onload = function() {
    if (this.status === 200) {
      console.log("Table created successfully!");
      // Handle successful table creation (e.g., display a success message)
    } else {
      console.error("Error creating table:", this.responseText);
      // Handle errors (e.g., display an error message)
    }
  };
  xhr.send("create_table=true"); // Send a POST parameter to trigger the action in PHP
}

document.getElementById("create-table-button").addEventListener("click", createUpdatedTable);

</script>
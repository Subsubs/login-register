<?php
session_start();

if (!isset($_SESSION["user_id"]) || !isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "login_register";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedRoomId = $_POST["room"];

    // Retrieve the schedule for the selected room
    $scheduleQuery = "SELECT * FROM rooms WHERE id = $selectedRoomId";
    $scheduleResult = $conn->query($scheduleQuery);

    if ($scheduleResult === false) {
        // Query execution failed, display the error
        echo "Error: " . $conn->error;
    } elseif ($scheduleResult->num_rows > 0) {
        // Display schedule
        echo "<h3>Schedule for Room {$selectedRoomId}</h3>";
        echo "<table border='1'>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Class</th>
                </tr>";

        while ($row = $scheduleResult->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['day']}</td>
                    <td>{$row['time']}</td>
                    <td>";
        
            // Customize display based on room ID
            if ($selectedRoomId == 1) {
                echo "Room 1: 2";
            } elseif ($selectedRoomId == 2) {
                echo "Room 2: 3";
            } else {
                echo "1";
            }
        
            echo "</td></tr>";
        }
        

        echo "</table>";
    } else {
        // No schedule found
        echo "No schedule found for Room {$selectedRoomId}";
    }
}
?>

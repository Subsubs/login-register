<?php
// Start the session
session_start();

// Check if the user is not logged in


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

// Retrieve user data from the database
$sql = "SELECT id, username FROM admin_credentials";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List - DASH</title>
    <link rel="stylesheet" href="css2/trystyle.css">
</head>

<body>
    <header>
        <h2 class="logo"></h2>
        <h3 class="Dash">DASH</h3>
        <nav class="navigation">
            <a href="adminpanel.php"> Add User </a>
            <a href="addfac.php">Adding Faculty</a>
            <button onclick="window.location.href='logout.php'" class="btnLogin-popup"> logout </button>

        </nav>
    </header>

    <div class=“container”>
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row["username"]}</td>";
                        echo "<td><a href='delete_user.php?id={$row["id"]}'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No users found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
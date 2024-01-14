<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_register";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted for login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login_username"]) && isset($_POST["login_password"])) {
    // Get input data
    $login_username = $_POST["login_username"];
    $login_password = $_POST["login_password"];

    // Retrieve hashed password from the database
    $stmt = $conn->prepare("SELECT id, username, password FROM admin_credentials WHERE username = ?");
    $stmt->bind_param("s", $login_username);
    $stmt->execute();
    $stmt->bind_result($user_id, $db_username, $hashed_password);
    $stmt->fetch();
    $stmt->close();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASH</title>
    <link rel="icon" href="img/Dash1.png" type="image/x-icon">
    <link rel="stylesheet" href="css4/style2.css">
</head>

<body>
    <header>
        <h2 class="logo"></h2>
        <h3 class="Dash">DASH</h3>
        <nav class="navigation">
            <a href="faculty_list.php">Go to Faculty List</a>
            <a href="user_list.php">Go to User List</a>
            <a href="adminpanel.php"> Add User </a>
            <button onclick="window.location.href='logout.php'" class="btnLogin-popup"> logout </button>
        </nav>
    </header>

    <div class="container">

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="NameofFaculty">Faculty Name:</label><br>
            <input type="text" id="NameofFaculty" name="NameofFaculty"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $faculty_name = $_POST['NameofFaculty'];

            $sql = "INSERT INTO faculty (NameofFaculty)
                VALUES ('$faculty_name')";

            if ($conn->query($sql) === TRUE) {
                echo '<div class="success-message">New Faculty added successfully.</div>';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>

    </div>




    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
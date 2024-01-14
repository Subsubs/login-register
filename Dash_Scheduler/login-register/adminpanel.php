<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/Dash1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASH</title>
    <link rel="stylesheet" href="css1/style1.css">
</head>

<body>
    <header>
        <h2 class="logo"></h2>
        <h3 class="Dash">DASH</h3>
        <nav class="navigation">
            <a href="user_list.php">Go to User List</a>
            <a href="addfac.php">Adding Faculty</a>
            <button onclick="window.location.href='logout.php'" class="btnLogin-popup">logout</button>

        </nav>
    </header>

    <div class="container">
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

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["new_admin_username"]) && isset($_POST["new_admin_password"])) {
            // Get input data
            $new_admin_username = $_POST["new_admin_username"];
            $new_admin_password = $_POST["new_admin_password"];

            // Check if the username already exists
            $check_username_sql = "SELECT id FROM admin_credentials WHERE username = ?";
            $check_username_stmt = $conn->prepare($check_username_sql);
            $check_username_stmt->bind_param("s", $new_admin_username);
            $check_username_stmt->execute();
            $check_username_stmt->store_result();

            if ($check_username_stmt->num_rows > 0) {
                echo '<div class="error-message">Username is already taken. Choose a different username.</div>';
            } else {
                // Hash the password
                $hashed_password = password_hash($new_admin_password, PASSWORD_DEFAULT);

                // Prepare the SQL statement
                $insert_sql = "INSERT INTO admin_credentials (username, password) VALUES (?, ?)";
                $insert_stmt = $conn->prepare($insert_sql);
                $insert_stmt->bind_param("ss", $new_admin_username, $hashed_password);

                // Execute the statement
                if ($insert_stmt->execute()) {
                    echo '<div class="success-message">New admin user added successfully.</div>';
                } else {
                    echo '<div class="error-message">Error adding new admin user: ' . $insert_stmt->error . '</div>';
                }

                // Close the statement
                $insert_stmt->close();
            }

            // Close the statement for checking username
            $check_username_stmt->close();
        }
        ?>
        <div class="form-box login">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="new_admin_username" required><br>
                    <label for="new_admin_username">Username:</label>
                </div>

                <div class="form-group">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="new_admin_password" required><br>
                    <label for="new_admin_password">Password:</label>
                </div>

                <button type="submit" value="Add Admin User" class="btn"> Add Admin User</button>
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>

<?php
$conn->close();
?>
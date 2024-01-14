<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/Dash1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASH Admin Page</title>
    <link rel="stylesheet" href="css1/style1.css">
 
</head>
<body>
    <header>
        <h2 class="logo"></h2>
        <h3 class="Dash">DASH ADMIN PAGE</h3>
        <nav class="navigation">
        <a href="home.php">Home</a>
        <button class="btnLogin-popup" onclick="window.location.href='login.php'">Login</button>
    </nav>
    </header>

    <div class="container">
        <span class="icon-close" onclick="window.location.href='home.php'"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <form method="post" action="adminpanel.php" onsubmit="return validateForm()">
                <div class="form-group">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="adminPassword" name="admin_password" required oninput="checkPassword()">
                    <br>
                    <label for="adminPassword">Administrator Password:</label>
                </div>
                
                <button type="submit" class="btn" disabled>Go to Admin Panel</button>
            </form>
            <p id="errorMessage" style="color: red;"></p>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        function validateForm() {
            var passwordInput = document.getElementById('adminPassword');
            var errorMessage = document.getElementById('errorMessage');
            var submitButton = document.querySelector('button[type="submit"]');
            var adminPassword = "123"; // Change this to your actual admin password

            if (passwordInput.value === adminPassword) {
                submitButton.disabled = false;
                errorMessage.textContent = '';
                return true; // Allow form submission
            } else {
                submitButton.disabled = true;
                errorMessage.textContent = 'Incorrect password. Please try again.';
                return false; // Prevent form submission
            }
        }

        function checkPassword() {
            var passwordInput = document.getElementById('adminPassword');
            var submitButton = document.querySelector('button[type="submit"]');
            submitButton.disabled = passwordInput.value === '';
        }
    </script>

    
</body>
</html>
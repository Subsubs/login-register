<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("resources/includes/links.php"); ?>
</head>

<body>
    <?php
    if ($resource_class == true) {
    ?>
    <?php
    } else {
    ?>
        <header>
            <h3 class="Dash">DASH LOGIN PAGE</h3>
            <nav class="navigation">
                <a href="home.php">Home</a>
                <a href="loginpage.php">Admin Panel</a>
            </nav>
        </header>
    <?php
    }
    ?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Passing JavaScript variables to PHP
    </title>
</head>

<body>
    <h1 style="color:green;">
        GeeksforGeeks
    </h1>

    <form method="get" name="form" action="try.php">
        <label for="data">Enter Data:</label>
        <input type="text" placeholder="Enter Data" name="data">
        
        <label for="name">Select Name:</label>
        <select name="name">
            <option value="John">John</option>
            <option value="Jane">Jane</option>
            <!-- Add more options as needed -->
        </select>

        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
$result = $_GET['data'];
$selectedName = $_GET['name'];
echo "Data: $result, Selected Name: $selectedName";
?>
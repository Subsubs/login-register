<?php
if (isset($_GET['username'])) {
    $selectedUsername = $_GET['username'];

    // Replace the query with the actual query to fetch data based on the username
    $dataQuery = "SELECT * FROM your_table WHERE username = '$selectedUsername'";
    $dataResult = mysqli_query($conn, $dataQuery);

    while ($row = mysqli_fetch_assoc($dataResult)) {
        // Modify this part based on your tab structure
        echo "<p>" . $row['column_name'] . "</p>";
    }
}
?>
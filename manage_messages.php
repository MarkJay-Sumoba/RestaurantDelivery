<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Messages</title>
    <!-- Add any additional styling or scripts if needed -->
</head>
<body>

<h2>Manage Messages</h2>

<?php
require "dbConnect.php";

// Fetch messages from the database
$sql = "SELECT * FROM ContactUs";
$query = $db->query($sql);

if ($query) {
    if ($query->rowCount() > 0) {
        echo "<ul>";
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "<li><strong>Name:</strong> " . htmlspecialchars($row['FullName']) . "<br>";
            echo "<strong>Email:</strong> " . htmlspecialchars($row['UserEmail']) . "<br>";
            echo "<strong>Message:</strong> " . htmlspecialchars($row['Message']) . "<br></li>";
        }
        echo "</ul>";
    } else {
        echo "No messages found.";
    }
} else {
    echo "Error: Unable to fetch messages. " . $db->errorInfo()[2];
}

?>

</body>
</html>

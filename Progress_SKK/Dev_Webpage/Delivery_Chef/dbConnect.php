<?php

require "includes/functions.php";

// Variable
$dbType = "mysql"; // Type of database to connect to
$dbServer = "localhost"; // Host name of my server
$dbName = "fsd10_victor"; // Name of my database
$dbPort = "3304"; // Port for database server (check MAMP)
$dbCharset = "utf8"; // Charset encoding for the database
$dbUsername = "fsduser"; // User with access to the database
$dbPassword = "myDBpw"; // $dbUsername password

// Connection string (data source name)
$dbDSN = "{$dbType}:host={$dbServer};dbname={$dbName};port={$dbPort};charset={$dbCharset}";
// $db = new PDO($dbDSN, $dbUsername, $dbPassword);

try {
    // Open database connection
    $db = new PDO($dbDSN, $dbUsername, $dbPassword);
    
    // If the connection is successful
    echo "Connected to the database successfully.";
} catch (PDOException $error) {
    // If there is an error in the connection
    echo "Connection failed: " . $error->getMessage();
}
?>
<?php

require "includes/functions.php";
require "validation.php";

// open session
session_start();

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
$db = new PDO($dbDSN, $dbUsername, $dbPassword);

$sql = "SELECT foodcat_id, foodcat_desc FROM food_cat ORDER BY foodcat_id ASC";
$query = $db->query($sql);
$allCategories = $query->fetchAll(PDO::FETCH_KEY_PAIR);

$sqlUser = "SELECT id, email FROM users ORDER BY id ASC";
$queryUser = $db->query($sqlUser);
$allUsers = $queryUser->fetchAll(PDO::FETCH_KEY_PAIR);

// ?>
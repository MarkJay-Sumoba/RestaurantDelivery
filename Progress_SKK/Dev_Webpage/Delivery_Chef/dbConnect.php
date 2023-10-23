<?php
// require the functions files
// require "includes/functions.php";

// variable
$dbType = "mysql"; // type of database to connect to
$dbServer = "localhost"; // host name of my server
$dbName = "fsd10_victor"; // name of my database
$dbPort = "3304"; // port for database server (check MAMP)
$dbCharset = "utf8"; // charset encoding for database
$dbUsername = "fsduser"; // user with access to db
$dbPassword ="myDBpw"; // $dbUsername password

// connection string (data source name)

$dbDSN = "{$dbType}:host={$dbServer};dbname={$dbName};port={$dbPort};charset={$dbCharset}";


// open database connection
try{
$db = new PDO($dbDSN, $dbUsername, $dbPassword);
  // if the connection is successful
  echo "Connected to the database successfully.";
}catch (PDOException $err){
  echo "Connect failed: " . $err->getMessage();
}

?>
<?php

// variable
$dbType = "mysql"; // type of database to connect to
$dbServer = "localhost"; // host name of my server
$dbName = "restaurantdelivery"; // name of my database
$dbPort = "3304"; // port for database server (check MAMP), ($dbPort = "8889"; on my MAMP)
$dbCharset = "utf8"; // charset encoding for database
$dbUsername = "restaurantdeliveryuser"; // user with access to db
$dbPassword ="myDBpw"; // $dbUsername password

/*// Create connection
$db = new PDO($dbDSN, $dbUsername, $dbPassword);*/

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

// connection string (data source name)
$dbDSN = "{$dbType}:host={$dbServer};dbname={$dbName};port={$dbPort};charset={$dbCharset}";

// Function to sanitize and validate input
function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $fullName = sanitizeInput($_POST["fullName"]);
    $userEmail = sanitizeInput($_POST["userEmail"]);
    $message = sanitizeInput($_POST["message"]);

    // Insert data into the database
    $sql = "INSERT INTO ContactUs (FullName, UserEmail, Message) VALUES ('$fullName', '$userEmail', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!-- HTML code remains unchanged -->

<section class="contactus">
    <!-- ... Existing HTML code ... -->

    <div class="contact-container text-center mx-auto my-auto px-5 py-4 col-lg-4">
        <form method="post" action="contact_us.php">
            <h2>Send Us A Message</h2>
            <div class="contact-item">
                <input type="text" name="fullName" required="required">
                <span>Full Name</span>
            </div>

            <div class="contact-item mt-2">
                <input type="text" name="userEmail" required="required">
                <span>Email</span>
            </div>

            <div class="contact-item mt-2">
                <textarea name="message" required="required"></textarea>
                <span>Type your Message...</span>
            </div>

            <div class="contact-item mt-2">
                <input type="Submit" value="Send" required="required">
            </div>
        </form>
    </div>
</section>

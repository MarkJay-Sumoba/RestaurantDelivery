<?php
// Database configuration
$servername = "your_database_server";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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

// Close the database connection
$conn->close();
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

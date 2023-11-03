<?php
require "dbConnect.php";

function sanitizeInput($input) {
    // Remove leading and trailing whitespaces
    $input = trim($input);
    // Remove HTML and PHP tags
    $input = strip_tags($input);
    // Convert special characters to HTML entities
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    return $input;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $fullName = sanitizeInput($_POST["fullName"]);
    $userEmail = sanitizeInput($_POST["userEmail"]);
    $message = sanitizeInput($_POST["message"]);

    // Insert data into the database
    $sql = "INSERT INTO ContactUs (FullName, UserEmail, Message) VALUES (:fullName, :userEmail, :message)";
    $data = [
        'fullName' => $fullName,
        'userEmail' => $userEmail,
        'message' => $message,
    ];

    $query = $db->prepare($sql);
    if ($query->execute($data)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $query->errorInfo()[2];
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

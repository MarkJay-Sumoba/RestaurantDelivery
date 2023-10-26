<?php
require_once 'dbConnect.php';
require_once 'validation.php';

session_start();

$errorMessage = "";

if (isset($_POST['submit'])) {
    $password = $_POST['pwd_deleteAccount']; 

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        $check = $db->prepare("SELECT * FROM users WHERE id = :user_id");
        $check->bindParam(':user_id', $user_id);
        $check->execute();
        $user = $check->fetch();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $deleteUser = $db->prepare("DELETE FROM users WHERE id = :user_id");
                $deleteUser->bindParam(':user_id', $user_id);
                $deleteUser->execute();
                session_destroy(); 
                header("Location: index.php");
                exit();
            } else {
                $errorMessages = "Incorrect password.";
            }
        } else {
            $errorMessages = "User not found.";
        }
    }
}
?>







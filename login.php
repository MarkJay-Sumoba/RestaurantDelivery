<?php
session_start();
require_once 'dbConnect.php';

      if ( $_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['login_email'];
        $password = $_POST['login_password'];

              // Find user data into the "users" table
              $sql = "SELECT * FROM users WHERE email = :email";
              $login = $db->prepare($sql);
              $login->bindParam(':email', $email);
              $login->execute();
              $user = $login->fetch(PDO::FETCH_ASSOC);

              if ($user && password_verify($password, $user['password'])) {
                // Password matches 
                $_SESSION['user_id'] = $user['id']; // Set a session variable for the user
        
                // Redirect to a protected page 
                header('Location: index.php'); // Change this to your desired redirect page
            } else {
                // Password doesn't match or user not found 
                $loginError = "Invalid username/email or password.";
            }
        }
  

  
  ?>


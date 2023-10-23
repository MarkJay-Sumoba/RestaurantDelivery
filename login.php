<?php
require_once 'dbConnect.php';

      if ( $_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['login_email'];
        $password = $_POST['login_password'];

              // Find user data into the "users" table
              $sql = "SELECT * FROM users WHERE email = :email";
              $login = $db->prepare($sql);
              $login->bindParam(':email', $email);
              $login->execute();
              $user = $login->fetch();

              //Verify weather the password and email matches
              if ($user && password_verify($password, $email)) {
                // Set a session variable for the user 
                $_SESSION['user_id'] = $user['id']; 
        
                // Redirect to home page 
                header('Location: index.php'); 
            } else {
                // Password doesn't match or user not found 
                $loginError = "Invalid username/email or password.";
            }
        }
  

  
  ?>


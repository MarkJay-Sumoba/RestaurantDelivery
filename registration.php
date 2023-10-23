<?php
      require_once 'dbConnect.php';

    $agreeTermsError = "";
    $emailError = "";
    $registerSuccess = "";
    $registerError = "";

      if ( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])){
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";

        if (!isset($_POST['agree_terms'])) {
            $agreeTermsError = "You must agree to the terms & conditions.";
        } else {

        // data sanitization - built in php
        $email = filter_var($_POST['register_email'], FILTER_SANITIZE_EMAIL);
        // echo $email;
      
        // echo "<br>";
        // data validation - built in php
        $isEmailValid = filter_var($email, FILTER_VALIDATE_EMAIL);
        // if($isEmailValid){
        //   echo "Email is valid <br>";
        // } else{
        //   echo "Email is not valid <br>";
        // }


        if ($isEmailValid) {
          // Check if the email already exists in the database
          $sql = "SELECT COUNT(*) FROM users WHERE email = :email";
          $email_dup = $db->prepare($sql);
          $email_dup->bindParam(':email', $email);
          $email_dup->execute();
          $count = $email_dup->fetchColumn();
  
          if ($count > 0) {
              $emailError = "Email already exists."; die();
              
          } else {
             // Data sanitization for password 
             $password = filter_var($_POST['register_password'], FILTER_SANITIZE_STRING);
              
             if (strlen($password) >= 5) {
              $password = password_hash($_POST['register_password'], PASSWORD_BCRYPT);

              // Insert user data into the "users" table
              $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
              $register = $db->prepare($sql);
              $register->bindParam(':email', $email);
              $register->bindParam(':password', $password);
  
              if ($register->execute()) {
                  $registerSuccess = "User registered successfully!";
              } else {
                  $registerError = "Unable to register the user.";
                }
            } else {
                $registerError = "Password must be at least 5 characters long.";
            }
        }
    } else {
        $emailError = "Email is not valid.";
    }
}
}
  ?>


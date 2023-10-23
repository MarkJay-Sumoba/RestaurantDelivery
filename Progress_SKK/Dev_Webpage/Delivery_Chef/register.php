<?php
    require "dbConnect.php";
    $errorMassage ="";
    $logMessage = "";


    if ( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])){
      // $logMessage.= "<pre>";
      $logMessage = print_r($_POST, true);
      // $logMessage.= "</pre>";
      
      // data sanitization - built in php
      $email = filter_var($_POST['register_email'], FILTER_SANITIZE_EMAIL);
      // $logMessage.= $email;
    
      // $logMessage.= "<br>";
      // data validation - built in php
      $isEmailValid = filter_var($email, FILTER_VALIDATE_EMAIL);
      if($isEmailValid){
        $logMessage.= "Email is valid <br>";
     // Hash the password
       $password = password_hash($_POST['register_password'], PASSWORD_BCRYPT);

      } else{
        $logMessage.= "Email is not valid <br>";
      }


      if($isEmailValid){
       // Insert user data into the "users" table in your database
         $sql = "INSERT INTO users (email, pwd) VALUES (:email, :password)";
         $register = $db->prepare($sql);
         $register->bindParam(':email', $email);
         $register->bindParam(':password', $password);



      // check if the email input exists in the database
        $sql1 = "SELECT COUNT(email) FROM users WHERE email = :email";
        $regCheck = $db->prepare($sql1);
        $regCheck->bindParam(':email', $email);
        $regCheck->execute();
        $cntDuplicated = $regCheck->fetchColumn();

        if($cntDuplicated > 0){
          $errorMassage = "Error: The email already exists!";
         } elseif ($register->execute()) {
          $logMessage = "User registered successfully!";

        }
       } else {
         $errorMessage = "Email is not valid.";

       }

    }
?>
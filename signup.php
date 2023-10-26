<?php
require_once 'dbConnect.php';
require_once 'validation.php';

$errorMessages = "";
$successMessages = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {

  if (!isset($_POST['agree_terms'])) {
    $errorMessages = "You must agree to the terms & conditions.";
  } else {
    $email = sanitizeEmail($_POST['register_email']);
    $password = validatePassword($_POST['register_password']);

    if (validateEmail($email)) {
      $sql = "SELECT COUNT(*) FROM users WHERE email = :email";
      $check = $db->prepare($sql);
      $check->bindParam(':email', $email);
      $check->execute();
      $count = $check->fetchColumn();

      if ($count > 0) {
        $errorMessages = "Email already exists.";
      } else {
        if ($password) {
          $hashedPassword = hashPassword($_POST['register_password']);

          $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
          $register = $db->prepare($sql);
          $register->bindParam(':email', $email);
          $register->bindParam(':password', $hashedPassword);

          if ($register->execute()) {
            header("Location: login.php");
            exit(); 
          } else {
            $errorMessages = "Unable to register the user.";
          }
        } else {
          $errorMessages = "Password must be at least 5 characters long.";
        }
      }
    } else {
      $errorMessages = "Email is not valid.";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" type="text/css" href="./css/login-register.css" />
  </head>
  <body>

    <header>
      <!-- Navigation bar -->
      <nav class="navbar navbar-dark bg-dark navbar-expand-md py-4">
        <div class="container-fluid">
          <a class="navbar-logo px-3" href="index.php"
            >Delivery<span>Chef</span></a
          >
        </div>
      </nav>

      <div class="login-register-container container-fluid py-5">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="form-box p-4">
              <h2 class="text-white text-center mt-3">Sign Up</h2>
              <form class="input-group" id="register" method="post" action="">
                <div class="input-box mb-3">
                  <span class="icon"><i class="bi bi-envelope"></i></span>
                  <input type="email" name="register_email" class="input-field" required />
                  <label for="register_email">Email</label>
                </div>

                <div class="input-box mb-3">
                  <span class="icon"><i class="bi bi-lock"></i></span>
                  <input type="password" name="register_password" class="input-field" required />
                  <label for="register_password">Password</label>
                </div>

                <div class="form-check agree-terms mb-5 text-center">
                  <input type="checkbox" name="agree_terms" class="check-box mx-2" />
                  <span>I agree to the terms & conditions</span>
                </div>

                <div class="login-link-box mt-2">
                  <p>Already a member? <a href="login.php" class="login-link">Log In</a></p>
                </div>

                <button
                  type="submit" name="submit"
                  class="submit-btn m-auto px-1 py-3 my-2"
                >
                  Sign Up
                </button>
                <span class="error-msg"><?php echo $errorMessages; ?></span>
                <span class="success-msg"><?php echo $successMessages; ?></span>
              </form>
              </div>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>


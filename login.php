<?php

require_once 'dbConnect.php';
require_once 'validation.php';

session_start(); 

if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

$errorMessages = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
    $email = sanitizeEmail($_POST['register_email']);

    if (validateEmail($email)){

        $sql = "SELECT * FROM users WHERE email = :email";
        $check = $db->prepare($sql);
        $check->execute(["email" => $email]);
        $data = $query->fetch();


            if (password_verify($_POST['login_password'], $data['password'])) {

                $_SESSION['submit'] = true;
                $_SESSION['user_id'] = $data['id'];

                header("location: index.php");
                die();
            }
        }

        $errorMessages = "Invalid email/password";
    }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
              <h2 class="text-white text-center mt-3">Log In</h2>
              <form class="input-group" id="login" action="" method="post">
                <div class="input-box mb-3">
                  <span class="icon"><i class="bi bi-envelope"></i></span>
                  <input type="email" class="input-field" name="login_email" value="<?php echo $email ?>" required />
                  <label for="login_email">Email</label><br>
                </div>
                
                <div class="input-box mb-3">
                  <span class="icon"><i class="bi bi-lock"></i></span>
                  <input type="password" class="input-field" name="login_password" value="<?php echo $pwd ?>" required />
                  <label for="login_password">Password</label>
                </div>

                <div
                  class="form-check remember-forgot mb-5 d-flex flex-column text-center"
                >
                  <label for=""
                    ><input type="checkbox" class="check-box mb-3" name="remember_me" />Remember
                    Password</label
                  >
                  <a href="#">Forgot Password?</a>
                </div>

                <div class="register-link-box mt-2">
              <p>Already have an account? <a href="signup.php" class="register-link">Sign Up</a></p>
            </div>

                <button
                  type="submit"
                  class="submit-btn m-auto px-1 py-3"
                  name="submit"
                >
                  Log in
                </button>

                <span class="error-msg"><?php echo $errorMessages; ?></span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>



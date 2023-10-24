<?php
// Include the database connection file (dbConnect.php)
require_once 'dbConnect.php';

// if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
//   echo "<pre>";
//   echo print_r($_POST);
//   echo "</pre>";
// }

// Check if the user is already logged in. If yes, redirect to the index page.
// if ($userIsLoggedIn) {
//     header("location: index.php");
//     die();
// }

session_start(); // Start a session

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

$errorMessages = "";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
    echo "<pre>";
    echo print_r($_POST);
    echo "</pre>";

    $email = filter_var($_POST['login_email'], FILTER_SANITIZE_EMAIL);
    echo $email;

    $isEmailValid = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($isEmailValid){
    //   echo "Email is valid <br>";
    // } else{
    //   echo "Email is not valid <br>";
    // }

}

    // Validate if 'txtLogin' (username) is empty
    // if (empty($_POST['login_email'])) 
    //     $errorMessages .= "Username is required <br>";
    // }

    // Validate if 'txtPass' (password) is empty
    // if (empty($_POST['login_password'])) {
    //     $errorMessages .= "Password is required <br>";
    // }
  

    // If there are no validation errors, proceed to validate user and password combination
    // if (empty($errorMessages)) {
        // Fetch data from the database
        $sql = "SELECT * FROM users WHERE email = :email";
        $query = $db->prepare($sql);
        $query->execute(["email" => $_POST['login_email']]);
        $data = $query->fetch();

        // if ($data) {
            // Username exists in the database

            if (password_verify($_POST['login_password'], $data['password'])) {
                // The username and password match

                // Start a session and set session variables to keep the user logged in
                session_start();
                $_SESSION['submit'] = true;
                $_SESSION['user_id'] = $data['id'];

                // You can also keep the user logged in using cookies if needed
                // $cookie_expiration = time() + (60*60*24*7); // 1 week
                // setcookie('cLoggedIn', true, $cookie_expiration);
                // setcookie('cRealName', $data['real_name'], $cookie_expiration);

                // Redirect to the index page
                header("location: index.php");
                die();
            }
        // }

        // Username does not exist in the database OR password does not match
        $errorMessages = "Invalid email/password";
    }
// }
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
                  <input type="email" class="input-field" name="login_email" required />
                  <label for="login_email">Email</label><br>
                </div>
                
                <div class="input-box mb-3">
                  <span class="icon"><i class="bi bi-lock"></i></span>
                  <input type="password" class="input-field" name="login_password" required />
                  <label for="login_password">Password</label>
                </div>

                <div
                  class="form-check remember-forgot mb-5 d-flex flex-column text-center"
                >
                  <label for=""
                    ><input type="checkbox" class="check-box mb-3" />Remember
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



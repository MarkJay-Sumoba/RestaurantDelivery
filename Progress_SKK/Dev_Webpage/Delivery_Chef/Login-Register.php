<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" type="text/css" href="./css/login-register.css" />
</head>

<body>
  <header>
    <!-- Navigation bar -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-md py-4">
      <div class="container-fluid">
        <a class="navbar-logo px-3" href="index.php">Delivery<span>Chef</span></a>
      </div>
    </nav>
    <div>

      <?php
        // require_once 'dbConnect.php';

      //   if ( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])){
      //     echo "<pre>";
      //     print_r($_POST);
      //     echo "</pre>";
          
      //     // data sanitization - built in php
      //     $email = filter_var($_POST['register_email'], FILTER_SANITIZE_EMAIL);
      //     echo $email;
        
      //     echo "<br>";
      //     // data validation - built in php
      //     $isEmailValid = filter_var($email, FILTER_VALIDATE_EMAIL);
      //     if($isEmailValid){
      //       echo "Email is valid <br>";
      //     } else{
      //       echo "Email is not valid <br>";
      //     }
  
      //     if($isEmailValid){
      //       // Sanitize and hash the password
      //     $password = password_hash($_POST['register_password'], PASSWORD_BCRYPT);
  
      //     // Insert user data into the "users" table in your database
      //     $sql = "INSERT INTO users (email, pwd) VALUES (:email, :password)";
      //     $register = $db->prepare($sql);
      //     $register->bindParam(':email', $email);
      //     $register->bindParam(':password', $password);
  
      //     if ($register->execute()) {
      //         echo "User registered successfully!";
      //     } else {
      //         echo "Error: Unable to register the user.";
      //     }
      // } else {
      //     echo "Email is not valid.";
      //     }
  
      //   }

       ?>
    </div>

    <div class="login-register-container container-fluid py-5">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="form-box p-4">
            <div class="button-box">
              <div id="btn"></div>
              <button type="button" class="btn toggle-btn" onclick="login()">
                Login
              </button>
              <button type="button" class="btn toggle-btn" onclick="register()">
                Register
              </button>
            </div>

            <form class="input-group" id="login" method="POST" action="">
              <div class="input-box mb-3">
                <span class="icon"><i class="bi bi-envelope"></i></span>
                <input type="email" class="input-field" required />
                <label>Email</label>
              </div>

              <div class="input-box mb-3">
                <span class="icon"><i class="bi bi-lock"></i></span>
                <input type="password" class="input-field" required />
                <label>Password</label>
              </div>

              <div class="form-check remember-forgot mb-5 d-flex flex-column text-center">
                <label for=""><input type="checkbox" class="check-box mb-3" />Remember
                  Password</label>
                <a href="#">Forgot Password?</a>
              </div>

              <button type="submit" class="btn btn-primary submit-btn m-auto px-1 py-3">
                Log in
              </button>
            </form>

            <?php 
          require_once "register.php";
        ?>
            <form class="input-box input-group" id="register" method="POST" action="">
              <div class="mb-3">
                <span class="icon"><i class="bi bi-envelope"></i></span>
                <input type="email" name="register_email" class="input-field" required />
                <label>Email</label>
              </div>

              <div class="input-box mb-3">
                <span class="icon"><i class="bi bi-lock"></i></span>
                <input type="password" name="register_password" class="input-field" required />
                <label>Password</label>
              </div>

              <div class="text-center">
                <span class="log-msg"><?= $logMessage ?></span>
                <span class="error-msg"> <?= $errorMassage ?></span>
              </div>

              <div class="form-check mb-5 terms text-center">
                <input type="checkbox" class="check-box mx-1" /><span>I agree to the terms & conditions</span>
              </div>

              <button type="submit" name="submit" class="btn btn-primary submit-btn m-auto px-1 py-3">
                Sign up
              </button>
            </form>

          </div>
        </div>
      </div>
    </div>

    <script src="./scripts/login-register.js"></script>
  </header>
</body>

</html>
<?php
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo "--==Post Method was used==--";
  echo "<pre>";
   print_r($_POST);
  echo "</pre>";

    // Define and initialize variables
    $username = $password = "";
    $username_err = $password_err = "";
  
    // Get form data
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
  
    // Validate email
    if (empty($email)) {
        $username_err = "Please enter your email.";
    }
  
    // Validate password
    if (empty($password)) {
        $password_err = "Please enter your password.";
    }
 } 


<div class="login-register-container d-flex justify-content-center align-items-center">
  <span class="icon-close d-flex justify-content-center align-items-center"><i class="bi bi-x"></i></span>

  <!-- Login Form -->
  <div class="login-item login p-2">
    <h2>Login</h2>
    <form action="" method="POST">

      <div class="input-box mt-4">
        <span class="icon"><i class="bi bi-envelope"></i></span>
        <input type="email" required>
        <label>Email</label>
      </div>

      <div class="input-box mt-4">
        <span class="icon"><i class="bi bi-lock"></i></span>
        <input type="password" required>
        <label>Password</label>
      </div>

      <div class="remember-forgot mt-4 d-flex justify-content-between">
        <label for=""><input type="checkbox">Remember me</label>
        <a href="#">Forgot Password?</a>
      </div>
      <button type="submit" class="login-btn btn btn-warning p-1 mt-4">Login</button>
      <div class="login-register mt-2">
        <p>Dont Have An Account? <a href="#" class="login-link">Register</a></p>
        
      </div>
    </form>
  </div>

  <!-- Registration Form -->
  <div class="register-item register p-2">
    <h2>Register</h2>
    <form action="" method="POST">

      <div class="input-box mt-4">
        <span class="icon"><i class="bi bi-person-circle mx-1"></i></span>
        <input type="text" required>
        <label>Username</label>
      </div>

      <div class="input-box mt-4">
        <span class="icon"><i class="bi bi-envelope"></i></span>
        <input type="email" required>
        <label>Email</label>
      </div>

      <div class="input-box mt-4">
        <span class="icon"><i class="bi bi-lock"></i></span>
        <input type="password" required>
        <label>Password</label>
      </div>

      <div class="remember-forgot mt-4 d-flex justify-content-center">
        <label for=""><input type="checkbox"> I agree to the terms & conditions</label>
      </div>
      <button type="submit" class="login-btn btn btn-warning p-1 mt-4">Register</button>
      <div class="login-register mt-2">
        <p>Already have an account? <a href="#" class="register-link">Log In</a></p>
      </div>
    </form>
  </div>

</div>

?>

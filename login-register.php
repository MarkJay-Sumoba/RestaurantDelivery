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
              <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="btn toggle-btn" onclick="login()">
                  Login
                </button>
                <button
                  type="button"
                  class="btn toggle-btn"
                  onclick="register()"
                >
                  Register
                </button>
              </div>

              <?php require_once 'login.php'; ?>
              <form class="input-group" id="login" action="" >
                <div class="input-box mb-3">
                  <span class="icon"><i class="bi bi-envelope"></i></span>
                  <input type="email" class="input-field" name="login_email" required />
                  <label>Email</label><br>
                </div>
                

                <div class="input-box mb-3">
                  <span class="icon"><i class="bi bi-lock"></i></span>
                  <input type="password" class="input-field" name="login_password" required />
                  <label>Password</label>
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

                <button
                  type="submit"
                  class="submit-btn m-auto px-1 py-3"
                >
                  Log in
                </button>
                <span class="emailError"><?php echo $loginError; ?></span>
              </form>

              <?php require_once 'registration.php'; ?>
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

                <div class="form-check agree_terms mb-5 text-center">
                <input type="checkbox" name="agree_terms" class="check-box mx-2" /><span>I agree to the terms & conditions</span>
                </div>

                <button
                  type="submit" name="submit"
                  class="submit-btn m-auto px-1 py-3 my-2"
                >
                  Sign up
                </button>
                <span class="error-msg"><?php echo $emailError; ?></span>
                <span class="error-msg"><?php echo $agreeTermsError; ?></span>
                <span class="success-msg"><?php echo $registerSuccess; ?></span>
                <span class="error-msg"><?php echo $registerError; ?></span>
              </form>
            </div>
          </div>
        </div>
      </div>

      <script src="./scripts/login-register.js"></script>
    </header>
  </body>
</html>

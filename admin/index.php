<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" type="text/css" href="../css/login-register.css" />
  </head>
  <body>
    
      <div class="admin-login-container container-fluid py-5">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="form-box p-4">
              <h2 class="text-center mt-3">ADMIN</h2>
              <form class="input-group" id="login" action="" method="post">
                <div class="admin-input mb-3">
                  <span class="icon"><i class="bi bi-envelope"></i></span>
                  <input type="text" class="input-field" name="admin_username" placeholder="Username" required />
                </div>
                
                <div class="admin-input mb-3">
                  <span class="icon"><i class="bi bi-lock"></i></span>
                  <input type="password" class="input-field" name="admin_password" placeholder="Password" required />
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
  </body>
</html>



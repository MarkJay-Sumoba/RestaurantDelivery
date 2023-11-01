<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restaurant Delivery</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/user_account.css" />
  <link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>

<body>
  <nav class="navbar navbar-dark bg-dark navbar-expand-md">
    <div class="container-fluid">
      <a class="navbar-logo px-3" href="index.php">Delivery<span>Chef</span></a>

      <ul class="navbar-nav ms-auto flex-row flex-wrap mx-center my-auto">
        <li class="nav-item"><a class="nav-link mx-3 text-white" href="menu.php">Menu</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#about-us">About Us</a></li>
        <li class="nav-item"><a class="nav-link mx-3 text-white" href="#contact-us">Contact Us</a></li>
      </ul>

      <?php if (isset($_SESSION["user_id"]) && $_SESSION["role"] === "user") { ?>

      <div class="dropdown navbar-nav ms-auto">
        <a class="dropbtn mx-4"><i class="bi bi-person-circle mx-1 text-white"></i>Profile</a>
        <div class="dropdown-content">
          <a href="updateAccount.php">Edit Profile</a>
          <a href="updatePassword.php">Change Password</a>
          <a href="deleteAccount.php">Delete Account</a>
          <a href="">Order History</a>
          <a href="logout.php">Logout</a>
        </div>
      </div>
      <?php  } elseif (isset($_SESSION["user_id"]) && $_SESSION["role"] === "admin") { ?>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item d-flex flex-row align-items-center">
          <a class="nav-link login-window text-white mx-3" href="dashboard.php"><i
              class="bi bi-speedometer"></i>Dashboard</a>
          <a href="logout.php" class="nav-link login-window text-white mx-3"><i
              class="bi bi-box-arrow-right"></i>Logout</a>
        </li>
      </ul>
      <?php    } else { ?>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item d-flex flex-row align-items-center">
          <a class="nav-link login-window text-white mx-3" href="login.php"><i
              class="bi bi-person-circle mx-1 text-white"></i>Login</a>
        </li>
      </ul>
      <?php   } ?>


    </div>
  </nav>
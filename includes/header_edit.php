<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu Edit</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<nav class="navbar navbar-dark bg-dark navbar-expand-md>
      <div class=" container-fluid">
  <a class="navbar-logo px-3" href="index.php">Delivery<span>Chef</span></a>

  <ul class="navbar-nav ms-auto flex-row flex-wrap mx-center my-auto">
    <li class="nav-item"><a class="nav-link mx-3 text-white" href="menu.php">Menu</a></li>
    <li class="nav-item"><a class="nav-link text-white" href="#about-us">User-Info</a></li>
    <li class="nav-item"><a class="nav-link mx-3 text-white" href="#contact-us">Delivery-Info</a></li>
  </ul>

  <ul class="navbar-nav ms-auto">
    <li class="nav-item">
      <a class="nav-link login-window text-white mx-3" href="login.php"><i
          class="bi bi-person-circle mx-1 text-white"></i>Login</a>
    </li>
  </ul>
  </div>
</nav>

<h3> <?= "[ " . $pageTitle . " ]"?></h3>
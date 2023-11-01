<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu list</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" type="text/css" href="css/menu.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>


<nav class="navbar navbar-dark bg-dark navbar-expand-md">
  <div class="container-fluid">
    <a class="navbar-logo px-3" href="index.php">Delivery<span>Chef</span></a>


    <?php if (isset($_SESSION["user_id"]) && $_SESSION["role"] === "user") { ?>
    <form class="d-flex">
      <input class="form-control-lg me-2" type="search" placeholder="Search for menu" aria-label="Search" />
      <button class="btn btn-warning" type="submit">
        Search
      </button>
    </form>
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
    <ul class="navbar-nav ms-auto flex-row flex-wrap mx-center my-auto">
      <li class="nav-item"><a class="nav-link mx-3 text-white" href="menu.php">Menu</a></li>
      <li class="nav-item"><a class="nav-link mx-3 text-white" href="admin_menu.php">Edit Menu</a></li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item d-flex flex-row align-items-center">
        <a class="nav-link login-window text-white mx-3" href="dashboard.php"><i
            class="bi bi-speedometer"></i>Dashboard</a>
        <a href="logout.php" class="nav-link login-window text-white mx-3"><i
            class="bi bi-box-arrow-right"></i>Logout</a>
      </li>
    </ul>
    <?php    } else { ?>

    <?php 
    require_once 'dbConnect.php';
    $search = null;

    if (isset($_POST['search'])) {
      $searchMenu = $_POST['search'];

      $sql = "SELECT * FROM menu WHERE dish_title LIKE :searchMenu";
      $search = $db->prepare($sql);
      $search->execute(array(':searchMenu' => '%' . $searchMenu . '%'));
}
    ?>
    <form class="d-flex" method="POST" action="">
      <input class="form-control-lg me-2" type="search" name="search" placeholder="Search for menu" aria-label="Search" />
      <button class="btn btn-warning" type="submit">
        Search
    </button>
  </form>

    <ul class="navbar-nav ms-auto">
      <li class="nav-item d-flex flex-row align-items-center">
        <a class="nav-link login-window text-white mx-3" href="login.php"><i
            class="bi bi-person-circle mx-1 text-white"></i>Login</a>
      </li>
    </ul>
    <?php   } ?>


  </div>
</nav>


<!-- Filtering Menu with button -->
<div class="container-1-item col-lg-12 text-center my-4">
  <ul class="controls d-flex align-items-center justify-content-center flex-wrap p-1">
    <!-- <li class="category-btn btn btn-warning mx-2 my-4" data-filter="Popular Dish">
          <a href="menu.php">Popular Dish</a>
        </li> -->
    <li class="category-btn btn btn-warning mx-2 my-1" data-filter="All">
      <a href="menu.php">All</a>
    </li>
    <li class="category-btn btn btn-warning mx-2 my-1" data-filter="Entree">
      <a href="menu.php?cat=100">Entree</a>
    </li>
    <li class="category-btn btn btn-warning mx-2 my-1" data-filter="Vegetarian">
      <a href="menu.php?cat=200">Vegetarian</a>
    </li>
    <li class="category-btn btn btn-warning mx-2 my-1" data-filter="Meat">
      <a href="menu.php?cat=300">Meat</a>
    </li>
    <li class="category-btn btn btn-warning mx-2 my-1" data-filter="Seafood">
      <a href="menu.php?cat=400">Seafood</a>
    </li>
    <li class="category-btn btn btn-warning mx-2 my-1" data-filter="Beverage">
      <a href="menu.php?cat=500">Beverage</a>
    </li>
  </ul>

  <h2><?=($mainTitle??""); ?>
    <small><?=($pageTitle??""); ?></small>
  </h2>
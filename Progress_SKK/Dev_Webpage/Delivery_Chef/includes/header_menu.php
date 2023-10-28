<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu list</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" type="text/css" href="css/menu.css" />
</head>

<body>
  <div class="container-fluid">
    <nav class="jumbotron">
      <div class="d-flex justify-content-between align-items-center py-4 bg-dark">
        <p>
          <a class="logo px-3" href="index.php">Delivery<span>Chef</span></a>
        </p>

        <form class="d-flex">
          <input class="form-control-lg me-2" type="search" placeholder="Search for menu" aria-label="Search" />
          <button class="btn btn-warning" type="submit">
            Search
          </button>
        </form>

        <p>
          <a class="logo px-3" href="admin_menu.php">Edit Menu</a>
        </p>

        <div class="shopping">
          <img src="image/shopping.svg" />
          <span class="quantity">0</span>

        </div>
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
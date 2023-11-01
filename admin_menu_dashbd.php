<?php
  require "dbConnect.php";

  $sql = "SELECT * FROM menu ORDER BY foodcat_id ASC";
  $query = $db->prepare($sql);
  $query->execute();


  $sqlCat = "SELECT foodcat_desc FROM food_cat WHERE foodcat_id = :id";
  $queryCat = $db->prepare($sqlCat);
  $data = [];
  $catName = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" type="text/css" href="css/admin.css" />
</head>

<body>
  <div class="main-container d-flex">
    <div class="sidebar p-4 text-center" id="side_nav">
      <div class="side-header px-2 pt-3 pb-4">
        <h1 class="fs-4">Delivery<span>Chef</span></h1>
      </div>

      <ul class="side-menu list-unstyled px-2">
        <li class="">
          <a href="dashboard.php" class="text-decoration-none py-2 d-block"><i
              class="bi bi-speedometer"></i></i>Dashboard</a>
        </li>

        <li>
          <a href="admin_menu_dashbd.php" class="text-decoration-none py-2 d-block"><i class="bi bi-book"></i>Menu</a>
        </li>

        <li>
          <a href="admin_orders.php" class="text-decoration-none py-2 d-block"><i class="bi bi-cart"></i>Orders</a>
        </li>

        <li>
          <a href="admin_users.php" class="text-decoration-none py-2 d-block"><i class="bi bi-person"></i>Users</a>
        </li>

        <li>
          <a href="admin_employees.php" class="text-decoration-none py-2 d-block"><i
              class="bi bi-person"></i>Employees</a>
        </li>

        <li>
          <a href="index.php" class="text-decoration-none py-2 d-block logout mb-5"><i
              class="bi bi-box-arrow-right"></i>Logout</a>
        </li>
      </ul>

    </div>
    <div class="container-fluid content-container">
      <div class="header-box">
        <div class="header-title p-3">
          <h2>Menu</h2>
        </div>
      </div>

      <div class="card-container p-3 mt-2">
        <div class="table-container">
          <table class="table table-striped table-responsive">
            <thead>
              <tr>
                <th scope="col">Category</th>
                <th scope="col">Image</th>
                <th scope="col">Dish name</th>
                <th scope="col">Price</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>

            <tbody>
              <?php while($row = $query->fetch()) { 
                  $data['id']= $row['foodcat_id'];
                  $queryCat->execute($data);
                  $catName = $queryCat->fetchColumn();
                ?>

              <tr>
                <td><?=$catName;?></td>
                <td><img class="menu-img" src="<?=$row['image']; ?>" alt=""></td>
                <td><a href="menuItem.php?item=<?=$row['menu_id']; ?>"><?=$row['dish_title']; ?></a></td>
                <td><?=$row['price'] . "$"; ?></td>
                <td><button class="update-delete p-2 mx-1 rounded-3"><a
                      href="admin_menu.php?item=<?=$row['menu_id']; ?> ">Edit</a></button><button
                    class="update-delete p-2 mx-1 rounded-3"><a
                      href="deleteMenu.php?item=<?=$row['menu_id']; ?>">Delete</a></button></td>
              </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
      </div>



    </div>
  </div>
  </div>

  </div>
  </div>
</body>

</html>
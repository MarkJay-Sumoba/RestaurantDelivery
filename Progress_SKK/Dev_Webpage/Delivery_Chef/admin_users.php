<?php
// TODO : for the list of users , role info is necessary for categorization
require_once 'dbConnect.php';

// retrieve User info existing
$sql = "SELECT * FROM users WHERE role = 'user' ORDER BY role ASC ";
// $sql = "SELECT * FROM users ORDER BY role ASC ";
$query = $db->prepare($sql);
$query->execute();
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

    <!-- Side Bar -->
    <?= include 'admin_sidebar.php' ?>

    <div class="container-fluid content-container">
      <div class="header-box">
        <div class="header-title p-3">
          <h2>Users</h2>
        </div>
      </div>

      <div class="card-container p-3 mt-2">
        <div class="table-container">
          <table class="table table-striped table-responsive">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>

              <?php while($row = $query->fetch()) { ?>
              <tr>
                <th><?=$row['id']; ?></th>
                <th><?=$row['email']; ?></th>
                <th><?=$row['fname']. " " . $row['lname']; ?></th>
                <th><?=$row['address']; ?></th>
                <th><button class="update-delete p-2 mx-1 rounded-3"><a href="">Update</a></button><button
                    class="update-delete p-2 mx-1 rounded-3"><a href="">Delete</a></button></th>
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
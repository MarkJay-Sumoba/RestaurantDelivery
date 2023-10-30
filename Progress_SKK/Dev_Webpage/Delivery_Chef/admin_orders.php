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
          <h2>Delivery Status</h2>
        </div>
      </div>

      <div class="card-container p-3 mt-2">
        <div class="table-container">
          <table class="table table-striped table-responsive">
            <thead>
              <tr>
                <th scope="col">Order Date</th>
                <th scope="col">Order Id</th>
                <th scope="col">Employee Id</th>
                <!-- <th scope="col">Delivered to:</th> -->
                <th scope="col">Service Status</th>
                <th scope="col">Delivery Status</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>2023-10-28</th>
                <th>1</th>
                <th>--</th>
                <!-- <th>Sang Kyu</th> -->
                <!-- <th>123 3rd avenu Montreal</th> -->
                <th>Not Scheduled</th>
                <th>Preparing</th>
                <th><button class="update-delete p-2 mx-1 rounded-3"><a href="">Assign</a></button><button
                    class="update-delete p-2 mx-1 rounded-3"><a href="">Update</a></button></th>
              </tr>
              <tr>
                <th>2023-10-28</th>
                <th>3</th>
                <th>100</th>
                <!-- <th>Sang Kyu</th> -->
                <!-- <th>123 3rd avenu Montreal</th> -->
                <th>Scheduled</th>
                <th>Preparing</th>
                <th><button class="update-delete p-2 mx-1 rounded-3"><a href="">Assign</a></button><button
                    class="update-delete p-2 mx-1 rounded-3"><a href="">Update</a></button></th>
              </tr>
              <tr>
                <th>2023-10-28</th>
                <th>7</th>
                <th>105</th>
                <!-- <th>Sang Kyu</th> -->
                <!-- <th>123 3rd avenu Montreal</th> -->
                <th>Scheduled</th>
                <th>In Progress</th>
                <th><button class="update-delete p-2 mx-1 rounded-3"><a href="">Assign</a></button><button
                    class="update-delete p-2 mx-1 rounded-3"><a href="">Update</a></button></th>
              </tr>
              <tr>
                <th>2023-10-28</th>
                <th>10</th>
                <th>110</th>
                <!-- <th>Sang Kyu</th> -->
                <!-- <th>123 3rd avenu Montreal</th> -->
                <th>Complete</th>
                <th>Complete</th>
                <th><button class="update-delete p-2 mx-1 rounded-3"><a href="">Assign</a></button><button
                    class="update-delete p-2 mx-1 rounded-3"><a href="">Update</a></button></th>
              </tr>


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
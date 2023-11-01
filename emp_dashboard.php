<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" type="text/css" href="./css/admin.css" />
  </head>
  <body>
    <div class="main-container d-flex">

    <div class="sidebar p-4 text-center" id="side_nav">
  <div class="side-header px-2 pt-3 pb-4">
    <h1 class="fs-4"><a href="index.php">Delivery<span>Chef</span></a></h1>
  </div>

  <ul class="side-menu list-unstyled px-2">
    <li class="">
      <a href="emp_dashboard.php" class="text-decoration-none py-2 d-block"><i
          class="bi bi-speedometer"></i></i>Service</a>
    
    <li>
      <a href="emp_dashboard.php" class="text-decoration-none py-2 d-block"><i class="bi bi-truck"></i>Delivery</a>
    </li>

    <li>
      <a href="logout.php" class="text-decoration-none py-2 d-block logout mb-5"><i
          class="bi bi-box-arrow-right"></i>Logout</a>
    </li>

        </div>

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
                <th scope="col">Employee Id</th>
                <th scope="col">Service Status</th>
                <th scope="col">Delivery Status</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <th>100</th>
              <th>
                <select name=" Service Status">
                  <option value="assigned">Assigned</option>
                  <option value="not-assigned">Not Assigned</option>
                </select>
              </th>
                <th>
              <select name="Delivery Status">
                <option value="preparing">Preparing</option>
                <option value="in-progress">In Progress</option>
                <option value="completed">Completed</option>
              </select>
                </th>
              </tr>
                  </tbody>
                </table>
              </div>
            </div>


      </div>
  </body>
</html>


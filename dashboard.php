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
    <link rel="stylesheet" type="text/css" href="./css/admin.css" />
  </head>
  <body>
    <div class="main-container d-flex">

      <!-- Side Bar -->
      <?= include 'admin_sidebar.php' ?>

        <div class="container-fluid content-container">
          <div class="header-box">
            <div class="header-title p-3">
              <h2>Dashboard</h2>
            </div>
          </div>


          <div class="card-container p-3 mt-2">
            <h3 class="main-title">Data</h3>
            <div class="card-box p-2 rounded-1 d-flex flex-wrap gap-2">
              <div class="cardcontent-box d-flex justify-content-between align-items-center p-3">
                <div class="card-title">
                  <span>Total Users:</span>
                  <span class="user-count d-flex flex-columns">50</span>
                </div>
                <i class="bi bi-people-fill icon text-center p-1"></i>
                </div>

                <div class="cardcontent-box d-flex justify-content-between align-items-center p-3">
                  <div class="card-title">
                    <span>Total Orders:</span>
                    <span class="user-count d-flex flex-columns">100</span>
                  </div>
                  <i class="bi bi-people-fill icon text-center p-1"></i>
                  </div>

                  <div class="cardcontent-box d-flex justify-content-between align-items-center p-3">
                    <div class="card-title">
                      <span>Total Delivery:</span>
                      <span class="user-count d-flex flex-columns">20</span>
                    </div>
                    <i class="bi bi-people-fill icon text-center p-1"></i>
                    </div>

                    <div class="cardcontent-box d-flex justify-content-between align-items-center p-3">
                      <div class="card-title">
                        <span>Earnings Today:</span>
                        <span class="user-count d-flex flex-columns">3000$</span>
                      </div>
                      <i class="bi bi-people-fill icon text-center p-1"></i>
                      </div>
              </div>
            </div>

            <div class="card-container p-3 mt-2">
              <h3>Orders Today</h3>
              <div class="table-container">
                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">Order Id</th>
                      <th scope="col">Menu Id</th>
                      <th scope="col">Dish Ordered</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <th>4</th>
                      <th>Steak - main</th>
                      <th>20$</th>
                    </tr>
                    <tr>
                      <th>1</th>
                      <th>5</th>
                      <th>Angus Burger - main</th>
                      <th>15$</th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

              <div class="card-container p-3 mt-2">
                <h3>Delivers Today</h3>
                <div class="table-container">
                  <table class="table table-striped table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Schedule Id</th>
                        <th scope="col">Order Id</th>
                        <th scope="col">Employee</th>
                        <th scope="col">Service Status</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                
                </div>
              </div> 
             </div>
            
          </div>
        </div>
  </body>
</html>

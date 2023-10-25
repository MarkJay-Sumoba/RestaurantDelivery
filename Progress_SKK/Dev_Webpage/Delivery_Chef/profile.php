<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User_account</title>
    <link rel="stylesheet" href="./css/user_account.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>

  <body>

      <!-- Navigation bar -->
      <nav class="navbar navbar-dark bg-dark navbar-expand-md py-4">
        <div class="container-fluid">
          <a class="navbar-logo px-3" href="Index.html"
            >Delivery<span>Chef</span></a
          >
        </div>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
              <a class="nav-link login-window text-white mx-3" href="./Index.html"><i class="bi bi-person-circle mx-1 text-white"></i>Logout</a>
          </li>
      </ul>
      </nav>

    <div class="container light-style flex-grow-1 container-p-y">
      <h4 class="font-weight-bold py-3 mb-4">Account settings</h4>
      <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
          <!-- Side Bar Options -->
          <div class="col-md-3 pt-0">
            <div class="list-group list-group-flush account-settings-links">
              <a
                class="list-group-item list-group-item-action active"
                data-toggle="list"
                href="#account-profile"
                >My Profile</a
              >
              <a
                class="list-group-item list-group-item-action"
                data-toggle="list"
                href="#account-change-password"
                >Change password</a
              >
              <a
                class="list-group-item list-group-item-action"
                data-toggle="list"
                href="#account-info"
                >Info</a
              >
            </div>
          </div>

          <!-- To edit -->
          <div class="col-md-9">
            <div class="tab-content">
              <!-- My Profile -->
              <div class="tab-pane fade active show" id="account-profile">
                <hr class="border-light m-0" />
                <div class="card-body">
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control mb-1" value="" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" value="" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">E-mail</label>
                    <input type="text" class="form-control mb-1" value="" />
                  </div>
                </div>
              </div>

              <!-- Change Password -->
              <div class="tab-pane fade" id="account-change-password">
                <div class="card-body pb-2">
                  <div class="form-group">
                    <label class="form-label">Current password</label>
                    <input type="password" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">New password</label>
                    <input type="password" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">Repeat new password</label>
                    <input type="password" class="form-control" />
                  </div>
                </div>
              </div>

              <!-- Info -->
              <div class="tab-pane fade" id="account-info">
                <div class="card-body pb-2">
                  <div class="form-group">
                    <label class="form-label">Birthday</label>
                    <input
                      type="text"
                      class="form-control"
                      value=""
                    />
                  </div>
                  <div class="form-group">
                    <label class="form-label">Country</label>
                    <select class="custom-select">
                      <option>USA</option>
                      <option selected>Canada</option>
                      <option>UK</option>
                      <option>Germany</option>
                      <option>France</option>
                    </select>
                  </div>
                </div>
                <hr class="border-light m-0" />
                <div class="card-body pb-2">
                  <h6 class="mb-4">Contacts</h6>
                  <div class="form-group">
                    <label class="form-label">Phone</label>
                    <input
                      type="text"
                      class="form-control"
                      value=""
                    />
                    <div class="form-group">
                      <label class="form-label">Address</label>
                      <input
                        type="text"
                        class="form-control"
                        value=""
                      />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-right mt-3">
        <button type="button" class="btn btn-primary">Save changes</button
        >&nbsp;
        <button type="button" class="btn btn-default">Cancel</button>
      </div>
    </div>
    <script
      data-cfasync="false"
      src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
  </body>
</html>

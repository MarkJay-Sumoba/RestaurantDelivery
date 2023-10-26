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
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
  </head>
  <body>

<div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <h1 class="fs-4"><span
                        class="">DeliveryChef</span></h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0"><i
                        class="fal fa-stream"></i></button>
            </div>

            <ul class="list-unstyled px-2">
                <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fal fa-home"></i> Dashboard</a></li>
              

                <li class=""><a href="admin_menu" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                        <span></i> Menu</span>
                    </a>
                </li>


                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fal fa-envelope-open-text"></i> Orders</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-users"></i>
                        Users</a></li>
            </ul>
            <hr class="h-color mx-2">

            <ul class="list-unstyled px-2">

            </ul>

        </div>


        <div class="content">
        </div>
    </div>

    <script src="scripts/script.js"></script>
</body>
</html>
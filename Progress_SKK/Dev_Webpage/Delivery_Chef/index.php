<?php 
  require_once "dbConnect.php";
  include "includes/header_index.php";  

?>

<body>
  <nav class="navbar navbar-dark bg-dark navbar-expand-md>
      <div class=" container-fluid">
    <a class="navbar-logo px-3" href="index.php">Delivery<span>Chef</span></a>

    <ul class="navbar-nav ms-auto flex-row flex-wrap mx-center my-auto">
      <li class="nav-item"><a class="nav-link mx-3 text-white" href="menu.php">Menu</a></li>
      <li class="nav-item"><a class="nav-link text-white" href="#about-us">About Us</a></li>
      <li class="nav-item"><a class="nav-link mx-3 text-white" href="#contact-us">Contact Us</a></li>
    </ul>

    <?php if (isset($_SESSION["user_id"]) && $_SESSION["role"] === "user") { ?>

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

    <ul class="navbar-nav ms-auto">
      <li class="nav-item d-flex flex-row align-items-center">
        <a class="nav-link login-window text-white mx-3" href="dashboard.php"><i
            class="bi bi-speedometer"></i>Dashboard</a>
        <a href="logout.php" class="nav-link login-window text-white mx-3"><i
            class="bi bi-box-arrow-right"></i>Logout</a>
      </li>
    </ul>
    <?php    } else { ?>

    <ul class="navbar-nav ms-auto">
      <li class="nav-item d-flex flex-row align-items-center">
        <a class="nav-link login-window text-white mx-3" href="login.php"><i
            class="bi bi-person-circle mx-1 text-white"></i>Login</a>
      </li>
    </ul>
    <?php   } ?>


    </div>
  </nav>

  <header>
    <div class="jumbotron text-center d-flex justify-content-center align-items-center container-1">
      <div class="container-1-item col-lg-12 text-center">
        <h1>Welcome to Delivery Chef</h1>
        <h2>Delicious Food Are Waiting for you!</h2>
        <button type="button" class="btn btn-warning"><a href="./Menu.php">Order Online</a></button>
      </div>
  </header>

  <section class="gallery">
    <?php include "gallery.php" ?>
  </section>

  <section class="aboutus">
    <div class="container-fluid container-3" id="about-us">
      <div class="row">
        <div class="image-container text-center col-lg-6">
          <img src="image/aboutus.jpg" alt="chefs knife" class="img-fluid mx-auto my-3" />
        </div>
        <div class="aboutus-container col-lg-6">
          <h2 class="text-center">About Us</h2>
          <p>
            At Delivery Chef, we believe that great food should be accessible to everyone, no matter where they are or
            what their schedule looks like. That's why we've embarked on a flavorful journey to redefine dining in the
            modern world. With a passion for culinary excellence, a commitment to convenience, and a dash of creativity,
            we've crafted a unique experience just for you.
          </p>

          <h3>Our Story</h3>
          <p> Delivery Chef was born out of a shared love for delicious food and a deep appreciation for the art of
            cooking. Our founders, Alex and Mia, were both professional chefs with an unwavering dedication to their
            craft. However, they also understood the challenges that people face in their busy lives when it comes to
            enjoying a restaurant-quality meal.
            With this in mind, they set out to bridge the gap between fine dining and everyday life. They envisioned a
            restaurant that doesn't confine you to a physical location or a rigid schedule but brings gourmet dishes to
            your doorstep whenever you crave them.
          </p>
        </div>


        <div class="aboutus-container col-lg-6">
          <h3>Our Culinary Team</h3>
          <p>
            At Delivery Chef, we've assembled a diverse team of culinary virtuosos who bring a world of flavors to your
            plate. Our chefs hail from different culinary backgrounds, each with their own signature dishes and styles.
            Together, they create an extensive menu that caters to every palate, from classic comfort foods to
            international delicacies.
            <br>
            <br>
            Our chefs are passionate about sourcing the freshest ingredients, and they infuse each dish with creativity
            and care, resulting in a dining experience that transcends the ordinary.
          </p>
          <br>
          <br>
          <h3>Our Vision</h3>
          <p>
            At Delivery Chef, our vision is clear: to transform the way you experience food. We want to be more than
            just a restaurant; we want to be a part of your everyday life. A culinary adventure is no longer reserved
            for special occasions; it's now an integral part of your daily routine.
          </p>
        </div>
        <div class="image-container text-center col-lg-6">
          <img src="./image/Chefs.jpg" alt="chefs" class="img-fluid mx-auto my-3 img-1" />
        </div>
      </div>
    </div>
  </section>

  <section class="contactus">
    <div class="container-fluid text-center container-4 my-4" id="contact-us">
      <h2>Contact Us</h2>
      <p>Delivery Chef is located in the heart of Old Montreal.</p>

      <div class="container-fluid location-container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-lg-4">
            <div class="info-container flex-column">
              <div class="location-item">
                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                <h3>Address</h3>
                <p>122 Rue Saint-Paul E,<br>Montreal, Quebec, h2Y 1G6</p>
              </div>

              <div class="location-item ">
                <div class="icon"><i class="bi bi-envelope"></i></div>
                <h3>Email</h3>
                <p>DeliveryChef@gmail.com</p>
              </div>

              <div class="location-item py-1">
                <div class="icon"><i class="bi bi-telephone"></i></div>
                <h3>Phone</h3>
                <p>514-123-4567</p>
              </div>

              <div class="location-item py-1">
                <h3>Follow Us</h3>
                <div class="icon"><a href=""><i class="bi bi-instagram"></i></a><a href=""><i
                      class="bi bi-facebook  mx-2"></i></a><a href=""><i class="bi bi-twitter-x"></i></a></div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 map-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d174.76873274555984!2d-73.55471582926054!3d45.50404474944808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a57815abb25%3A0x43633c7b12b3b712!2s122%20Rue%20Saint-Paul%20E%2C%20Montr%C3%A9al%2C%20QC%20H2Y%201G6!5e0!3m2!1sen!2sca!4v1697337649777!5m2!1sen!2sca"
              width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>

      <div class="contact-container text-center mx-auto my-auto px-5 py-4 col-lg-4">
        <form>
          <h2>Send Us A Message</h2>
          <div class="contact-item">
            <input type="text" name="" required="required">
            <span>Full Name</span>
          </div>

          <div class="contact-item mt-2">
            <input type="text" name="" required="required">
            <span>Email</span>
          </div>

          <div class="contact-item mt-2">
            <textarea required="required"></textarea>
            <span>Type your Message...</span>
          </div>

          <div class="contact-item mt-2">
            <input type="Submit" name="" value="Send" required="required">
          </div>

        </form>
      </div>
  </section>

  <section class="backtotop">
    <div class="top">
      <a href="#">
        <i class="bi bi-arrow-up"></i>
      </a>
    </div>
  </section>

  <?php include "includes/footer.php" ?>
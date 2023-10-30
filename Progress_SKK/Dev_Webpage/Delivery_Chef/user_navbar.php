<nav class="navbar navbar-dark bg-dark navbar-expand-md>
      <div class="container-fluid">
        <a class="navbar-logo px-3" href="index.php">Delivery<span>Chef</span></a>

        <?php
        session_start();
if (isset($_SESSION["user_id"])) {
    echo 
  '<div class="dropdown navbar-nav ms-auto">
    <a class="dropbtn mx-4"><i class="bi bi-person-circle mx-1 text-white"></i>Profile</a>
    <div class="dropdown-content">
        <a href="updateAccount.php">Edit Profile</a>
        <a href="updatePassword.php">Change Password</a>
        <a href="deleteAccount.php">Delete Account</a>
        <a href="">Order History</a>
        <a href="logout.php">Logout</a>
    </div>
  </div>';
} else {
    echo '<ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link login-window text-white mx-3" href="login.php"><i class="bi bi-person-circle mx-1 text-white"></i>Login</a>
    </li>
</ul>';

}
?>
      </div>
    </nav>
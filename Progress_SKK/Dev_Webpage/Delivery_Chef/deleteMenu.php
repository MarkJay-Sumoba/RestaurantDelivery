<?php

include "dbConnect.php";

$errorMessages = "";
$resultMessage = "";

// filtering invalid access to the page
if(!$_SESSION['user_id']){
  header("Location: index.php");
}


// check if item value exists on the GET
if(!isset($_GET)){
  menuPageNotFound();
}

$data = [
  'id'=>$_GET['item']
];

// check if the item exists in the DB
$query = $db->prepare("SELECT * FROM menu WHERE menu_id = :id");
$query->execute($data);
$result = $query->fetch();

if(!$result){
  menuPageNotFound();
}



if (isset($_POST['submit'])){
  $user_id = $_SESSION['user_id'];
  $pwd = $_POST['pwd_deleteMenu'];

  $sql = "SELECT * FROM users WHERE id = :userId";
  $queryAdmin = $db->prepare($sql);
  $queryAdmin->bindParam(":userId", $user_id, PDO::PARAM_INT);
  $queryAdmin->execute();
  $admin = $queryAdmin->fetch();

  if($admin && $_SESSION['role'] === 'admin') {
    if(password_verify($pwd, $admin['password'])){
      // delete if exists
      $query = $db->prepare("DELETE FROM menu WHERE menu_id = :id");
      $query->execute($data);

      // remove the image if exist
    if($result['image'] != ""){
       unlink($result['image']);
      }
      $resultMessage ="[ " . $result['dish_title'] . " ] " . " has been succesfully removed.";
    }else{
      $errorMessages = "Invalid Credential(Password)!";
    }
    
  }else {
    $errorMessages = "Invalid Credential(User ID)!";
  }

// redirect to index ( or tell user "entry removed")
// $mainTitle = "";
// $pageTitle = "[ Removed Item ] : ";
// include "includes/header_menu.php";
}


include "includes/header_login.php";
// echo "<p>" . $result['dish_title'] . " has been succesfully removed" . "</p>";

?>


<div class="profile-container mt-3">
  <h1>Delete Menu</h1>
  <form method="POST" action="">
    <div class="form-group">
      <label>Confirm Password</label>
      <input type="password" class="form-control" id="pwd_deleteMenu" name="pwd_deleteMenu" required>
    </div>

    <span class="text-danger"><?= $errorMessages ?></span>
    <span class="text-danger"><?= $resultMessage ?></span>

    <div class="text-right mt-3">
      <button type="submit" class="btn btn-danger" name="submit">Delete Menu</button>
    </div>
</div>
</div>
</form>
</div>



<?php include "includes/footer.php"; ?>
<?php
/*
include "dbConnect.php";
$_GET['item'] =""; // temporary for testing

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

// delete if exists
$query = $db->prepare("DELETE FROM menu WHERE menu_id = :id");
$query->execute($data);

// remove the image if exist
if($result['image'] != ""){
  unlink($result['image']);
}

// redirect to index ( or tell user "entry removed")
$mainTitle = "";
$pageTitle = "[ Removed Item ] : ";
// include "includes/header_menu.php";
*/
include "includes/header_delete.php";
// echo "<p>" . $result['dish_title'] . " has been succesfully removed" . "</p>";

?>


<div class="profile-container mt-3">
  <h1>Delete Menu</h1>
  <form method="POST" action="">
    <div class="form-group">
      <label>Confirm Password</label>
      <input type="password" class="form-control" id="pwd_deleteAccount" name="pwd_deleteAccount" required>
    </div>

    <span class="text-danger"><?= $errorMessages ?></span>

    <div class="text-right mt-3">
      <button type="submit" class="btn btn-danger" name="submit">Delete Account</button>
    </div>
</div>
</div>
</form>
</div>



<?php include "includes/footer.php"; ?>
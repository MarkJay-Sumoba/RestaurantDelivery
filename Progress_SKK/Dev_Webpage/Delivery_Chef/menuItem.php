<?php 

// connect to the database
  require "dbConnect.php";

// there is a $_GET['item'] that exists
$sql = "SELECT * FROM menu WHERE menu_id = :id";
$query = $db->prepare($sql);
$query->execute(['id' => $_GET['item'] ]);

$result = $query->fetch(); // fetch single row from DB

if(!$result){  // nothing found in the DB
  menuPageNotFound();
}

$mainTitle = "For your choice";  
include "includes/header_menu.php";
?>

<div class="row">

  <div class="row">
    <?php if($result['image'] != "") { ?>
    <div class="col-sm-8">
      <img class="img-responsive" src="<?=$result['image']; ?>" alt />
    </div>
    <?php } ?>
    <div class="col-sm 4">
      <h1><?= $result['dish_title'] ; ?></h1>
      </span><br />
      <?php if(isset($_SESSION["user_id"]) && $_SESSION["role"] == "admin") { ?>
      <a href="admin_menu.php?item=<?=$result['menu_id']; ?>"> Edit Item</a> -
      <a href="deleteMenu.php?item=<?=$result['menu_id']; ?>"> Delete </a>
      <?php } ?>
      <p><strong><?=$allCategories[$result['foodcat_id']]; ?> </strong></p>
      <p>
        <?= nl2br($result['description']); ?>
      </p>

      <button class="btn btn-primary" onclick="">Add to Cart</button>
    </div>
  </div>

</div>





<?php
include "includes/footer.php";
?>
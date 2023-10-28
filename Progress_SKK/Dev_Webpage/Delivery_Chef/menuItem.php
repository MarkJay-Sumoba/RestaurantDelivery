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

      <a href="admin_menu.php?item=<?=$result['menu_id']; ?>"> Edit Item</a> -
      <a href="delete.php?item=<?=$result['menu_id']; ?>"> Delete </a>

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
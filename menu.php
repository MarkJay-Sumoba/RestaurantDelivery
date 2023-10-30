<?php 
  require_once "dbConnect.php";

  $sql = "SELECT * FROM menu";
  $data = [];
  $currentNav = "recent"; 


  if(isset($_GET['cat'])){
    $sql .= " WHERE foodcat_id = :cat_id";
    $data['cat_id'] = $_GET['cat'];
    $currentNav = "C" . $_GET['cat'];
    $pageTitle = " [ " . $allCategories[$_GET['cat']] . " ]"; 
  }else {
    $sql .= " ORDER BY foodcat_id ASC";
  }
 
  $query = $db->prepare($sql);
  $query->execute($data);

  $mainTitle = "Popular Dish";
  include "includes/header_menu.php";
  
  ?>

<div class="row list">
  <?php while ($row = $query->fetch()) {
            $link = "menuItem.php?item=" . $row['menu_id'];
          ?>
  <div class="item">
    <?php if ($row['image'] !=""){ ?>
    <a href="<?=$link ; ?>">
      <img class="img-responsive" src="<?=$row['image'];?>" alt="" />
    </a>
    <?php }?>
    <h3 class="title">
      <a href="<?=$link; ?>"><?=$row['dish_title']; ?></a>
    </h3>
    <h4 class="price">
      <?= $row['price'] . " $"  ?>
    </h4>

    <button class="btn btn-primary add-btn" onclick="">Add to Cart</button>
  </div>
  <?php } ?>
</div>
<!-- <div class="list"> -->
<!-- Menu items will be inserted from the app.js -->
<!-- </div> -->
</div>
<div class="card">
  <h1>Order Summary</h1>
  <ul class="listCard"></ul>
  <div class="checkOut">
    <div class="total">0</div>
    <div class="closeShopping">Close</div>
  </div>
</div>

<?php
    include "includes/footer.php";
  ?>
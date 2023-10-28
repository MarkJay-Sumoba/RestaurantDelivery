<?php 
require "dbConnect.php";
// var_dump($_SERVER);
  // print_r($_FILES);
  // echo "<br> == POST == <br>";
  // print_r($_POST);

// variables
$errorMessages = "";
$dishTitle = "";
$foodPrice = "";
$selCategory = "";
$fileImage = "";
$txtDesc = "";
$itemId = "";

  // is there item in the query string
  if(array_key_exists('item', $_GET)){ 
    // ?item=x is in the URL

    // check that the item exists in the DB
      $query = $db->prepare("SELECT * FROM menu WHERE  menu_id = :id");
      $query->execute(['id'=>$_GET['item']]);
   
      $data = $query->fetch(); 
      if(!$data){ // nothing found in the database
         pageNotFound();
      } 

    // populate the form
    $dishTitle = $data['dish_title'];
    $foodPrice = $data['price'];
    $selCategory = $data['foodcat_id'];
    $fileImage = $data['image'];
    $txtDesc = $data['description'];
    $itemId = $data['menu_id'];

  }
// check the POST method
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  //validating the form
  if(validateIsEmptyData($_POST, 'dishTitle')) {
    $errorMessages = "Dish title is required";
  }else {
    $dishTitle = $_POST['dishTitle'];
  }
  
  if(validateIsEmptyData($_POST, 'foodPrice')) {
    $errorMessages = "Price is required";
  }else {
    $foodPrice = $_POST['foodPrice'];
  }
  
  if(validateIsEmptyData($_POST, 'selCategory')) {
    $errorMessages = "Category is required";
  }else {
    $selCategory = $_POST['selCategory'];
  }

  // If error message is empty then save to db
  if($errorMessages == ""){
    // save and upload the file (if applicable)
    if($_FILES['fileImage']['error'] == 0){

      $sourceFile = $_FILES['fileImage']['tmp_name'];
      $destinationFile = "image/menu/" . $_FILES['fileImage']['name'];

      if(move_uploaded_file($sourceFile, $destinationFile)){

        if($fileImage != "" && $fileImage != $destinationFile){
          unlink($fileImage);
        }
        $fileImage = $destinationFile;
      }

    } // end $_FILES error

    $txtDesc = $_POST['txtDesc'];
    $data = [
      "dishTitle"=>$dishTitle,
      "selCategory"=>$selCategory,
      "foodPrice"=>$foodPrice,
      "fileImage"=>$fileImage,
      "txtDesc"=>$txtDesc
    ];
    
    if($itemId == ""){
      // no item id was found = add new row to the database
      $sql = "INSERT INTO menu (dish_title, foodcat_id, price, image, description ) 
      VALUES (:dishTitle, :selCategory, :foodPrice, :fileImage, :txtDesc)";
    }else {
     // item id was found = update xisting row
      $sql = "UPDATE portfolio SET title = :title , caption = :caption, body = :body, 
        category_id = :cat_id, image = :image, update_time = :utime WHERE  portfolio_id= :pid";
     
      $data['pid'] = $itemId;    
     // add id to $data
    }
    
      $query = $db->prepare($sql);
      $query->execute($data);
  
       // if itemId does not exist (INSERT was performed) get the last inserted id from th DB
       if($itemId == "")  $itemId = $db->lastInsertId();
   
       // redirect user to the portfolio single item page
        header("location: menuItem.php?item={$itemId}");    
  }

}

  $pageTitle=  ($itemId == "")? "Add New Item" : "Update Item";
  // $currentNav = "add";
  include "includes/header_edit.php";
?>


<body>
  <div class="container-fluid admin-menu-container">
    <div class="row justify-content-center ">
      <form class="col-sm-6 col-sm-offset-3" method="POST" enctype="multipart/form-data" action="admin_menu.php">
        <div class="form-group mb-3">
          <label for="dish">Dish Title :</label>
          <input type="text" class="form-control" id="dish" name="dishTitle" value="<?=$dishTitle; ?>" required>
        </div>
        <div class="form-group mb-3">
          <label for="price">Price :</label>
          <input type="text" class="form-control" id="price" name="foodPrice" value="<?=$foodPrice; ?>" required>
        </div>
        <div class="form-group mb-3">
          <label for="fileImage">Image :</label>
          <input type="file" class="form-control" id="fileImage" name="fileImage">
        </div>
        <div class="form-group mb-3">
          <label for="selCategory">Food Category : </label>
          <select class="form-select" name="selCategory" aria-label="Default select example" required>
            <option value="">Select the Category</option>
            <?php foreach($allCategories as $cat_id => $cat_name) { 
              $selected = ($cat_id == $selCategory)? "selected" : "";
              ?>
            <option value="<?=$cat_id;?>" <?=$selected; ?>><?=$cat_name ?></option>
            <?php } ?>

          </select>
        </div>

        <div class="form-group mb-3">
          <label for="descFood">Description :</label>
          <textarea type="text" class="form-control" cols="40" rows="5" id="descFood"
            name="txtDesc"><?=$txtDesc; ?></textarea>
        </div>

        <!-- <div class="form-group mb-3">
          <label for="qty">Quantity :</label>
          <input type="text" class="form-control" id="qty" name="qtyOrder">
        </div>
        <div class="form-group mb-3">
          <label for="total">Total Price :</label>
          <input type="text" class="form-control" id="total" name="totPrice">
        </div> -->
        <div class="form-group mb-3">
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>


      </form>
    </div>
  </div>

</body>


<?php 
include "includes/footer.php";

?>
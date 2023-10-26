<?php 
require "dbConnect.php";

// variables
$errorMessages = "";
$dishTitle = "";
$foodPrice = "";
$selCategory = "";
$fileImage = "";

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

    }
  }

  $data = [
    "dishTitle"=>$dishTitle,
    "selCategory"=>$selCategory,
    "foodPrice"=>$foodPrice,
    "fileImage"=>$fileImage
  ];
  
  $sql = "INSERT INTO menu (dish_title, foodcat_id, price, image) 
      VALUES (:dishTitle, :selCategory, :foodPrice, :fileImage)";
  
  $query = $db->prepare($sql);
  $query->execute($data);

}

include "includes/header.php";

?>

<nav class="navbar navbar-dark bg-dark navbar-expand-md>
      <div class=" container-fluid">
  <a class="navbar-logo px-3" href="index.php">Delivery<span>Chef</span></a>

  <ul class="navbar-nav ms-auto flex-row flex-wrap mx-center my-auto">
    <li class="nav-item"><a class="nav-link mx-3 text-white" href="menu.php">Menu</a></li>
    <li class="nav-item"><a class="nav-link text-white" href="#about-us">User-Info</a></li>
    <li class="nav-item"><a class="nav-link mx-3 text-white" href="#contact-us">Delivery-Info</a></li>
  </ul>

  <ul class="navbar-nav ms-auto">
    <li class="nav-item">
      <a class="nav-link login-window text-white mx-3" href="login.php"><i
          class="bi bi-person-circle mx-1 text-white"></i>Login</a>
    </li>
  </ul>
  </div>
</nav>

<body>
  <div class="container-fluid admin-menu-container">
    <div class="row justify-content-center ">
      <form class="col-sm-6 col-sm-offset-3" method="POST" enctype="multipart/form-data" action="admin_menu.php">
        <div class="form-group mb-3">
          <label for="dish">Dish Title :</label>
          <input type="text" class="form-control" id="dish" name="dishTitle" required>
        </div>
        <div class="form-group mb-3">
          <label for="price">Price :</label>
          <input type="text" class="form-control" id="price" name="foodPrice" required>
        </div>
        <div class="form-group mb-3">
          <label for="fileImage">Image :</label>
          <input type="file" class="form-control" id="fileImage" name="fileImage">
        </div>
        <div class="form-group mb-3">
          <label for="selCategory">Food Category : </label>
          <select class="form-select" name="selCategory" aria-label="Default select example" required>
            <option value="" selected>Seletc the Category</option>
            <option value="100">ENTREE</option>
            <option value="200">VEGETARIAN</option>
            <option value="300">MEAT</option>
            <option value="400">SEAFOOD</option>
            <option value="500">BEVERAGE</option>
          </select>
        </div>

        <div class="form-group mb-3">
          <label for="descFood">Description :</label>
          <input type="text" class="form-control" id="descFood" name="txtDesc">
        </div>

        <div class="form-group mb-3">
          <label for="qty">Quantity :</label>
          <input type="text" class="form-control" id="qty" name="qtyOrder">
        </div>
        <div class="form-group mb-3">
          <label for="total">Total Price :</label>
          <input type="text" class="form-control" id="total" name="totPrice">
        </div>
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
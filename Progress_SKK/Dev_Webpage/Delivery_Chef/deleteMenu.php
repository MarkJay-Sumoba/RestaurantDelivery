<?php

include "dbConnect.php";

// check if item value exists on the GET
if(!isset($_GET)){
  pageNotFound();
}

$data = [
  'id'=>$_GET['item']
];

// check if the item exists in the DB
$query = $db->prepare("SELECT * FROM menu WHERE menu_id = :id");
$query->execute($data);
$result = $query->fetch();

if(!$result){
  pageNotFound();
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
include "includes/header_menu.php";
echo "<p>" . $result['dish_title'] . " has been succesfully removed" . "</p>";
include "includes/footer.php";


?>
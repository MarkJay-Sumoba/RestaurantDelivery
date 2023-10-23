<?php
require_once ('dbConnect.php');

$sql = "SELECT * FROM menu_items";
$stmt = $db->prepare($sql);
$stmt->execute();
$menuItems = $stmt->fetchAll();

?>
<?php
  require 'dbConnect.php';

  $sql = "SELECT * FROM tblgallery;";
  $query = $db->query($sql);  

  // include header
  
?>

<div class="container-fluid text-center container-2 mt-4 mb-4">
      <h2>Gallery</h2>
      <div class="menu-container text-center">

      <?php 
          while($row = $query->fetch()){
          $title = $row['title'];
          $file_path = $row['file_path'];  
        ?>
        <!-- display the image -->
        <img src="<?=$file_path?>" alt="<?=$title ?>" class="img-fluid mb-2 mx-2">  

        <?php  } ?>
      </div>
  </div>

<?php
  // include footer
?>
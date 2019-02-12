<?php
    if (isset($_POST['submit'])) {
      $conn = mysqli_connect("localhost","root","","moontower_admins");
      $id=mysqli_real_escape_string($conn,$_POST['deleteid']);
      $sql="delete from  `food-details` where id ='$id'";
      $foodname = mysqli_real_escape_string($conn,$_POST['deletepic']);
      $path = "../image-for-food/".$foodname;
      unlink($path);
      mysqli_query($conn,$sql);
      header('Location:../foodmamane.php?deleted');
    }


 ?>

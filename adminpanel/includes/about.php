<?php
if (isset($_POST['submit'])) {
  // code...
  $conn = mysqli_connect("localhost","root","","moontower_admins");
  $txt = mysqli_real_escape_string($conn,$_POST['paragaph']);
  $sql= "update `about` set `details` ='$txt'";
  mysqli_query($conn,$sql);
  header('Location:../about.php?upadated');
}

 ?>

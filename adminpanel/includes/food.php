<?php
if (isset($_POST['submit'])) {
  $newfilename = "name";

$conn = mysqli_connect("localhost","root","","moontower_admins");
$prodctname= mysqli_real_escape_string($conn,$_POST['nameofood']);
$productprice = mysqli_real_escape_string($conn,$_POST['foodprice']);
  $file = $_FILES['file'];

  $filename = $file["name"];
  $fileType = $file["type"];
  $fileTempName = $file["tmp_name"];
  $fileError = $file["error"];
  $fileSize = $file["size"];

  $fileExt = explode(".", $filename);
  $fileRealExt = strtolower(end($fileExt));


  $allowed = array("jpg","jpeg","png","JPG");

  if (empty($prodctname) || empty($productprice)) {
    echo "<p>Please Fill All Information</p>
    <a href='../foodmamane.php'>Go back</a>
    ";
    // code...
  }else {
    if (in_array($fileRealExt,$allowed)) {
      $imageFullName = $newfilename . "." . uniqid("", true) . "." . $fileRealExt;
      $imgdestination="../image-for-food/". $imageFullName;
      $sql1 = "INSERT INTO `food-details`( `productname`, `productprice`, `imagename`) VALUES ('$prodctname','$productprice','$imageFullName')";
      mysqli_query($conn,$sql1);
      move_uploaded_file($fileTempName,$imgdestination);
      header('Location:../foodmamane.php?upload=success');
    }
  }
}

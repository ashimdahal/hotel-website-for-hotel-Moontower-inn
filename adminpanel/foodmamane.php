
<?php

include "page_secure.php";
 ?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
 <style media="screen">
   .d-flex{
     width: 100%;

   }
   img{
     width: 25%;
     height: 25%;
   }
   .khana_ko_holder{
      box-shadow: 0px 0px 15px 0px blue;
   }
   form{
     width: 75%;
     text-align: center;
     box-shadow: 0px 0px 15px 0px red;
     margin-top: 10px;
   }
    form input[type=text]{
      width: 60%;
      height: 59px;
      margin: 4px;
       box-shadow: 0px 0px 10px 0px green;
    }
    form button{
      width: 75%;
      height: 59px;
      margin:10px;
      background: gray;
    }
   a{
     margin-left: 15px;
   }
 </style>

<title>Food Page Management</title>
  <a href="admin_dashboard.php">Go back</a>

<div class="d-flex justify-content-around flex-wrap">
  <form action="includes/food.php" method="POST" enctype="multipart/form-data">
    <h1>Add New Food Products</h1>
    <input type="text" name="nameofood" placeholder="Name of Food to Add">
    <br>
    <input type="text" name="foodprice" placeholder="Price of food to add(Please include RS or Currenct type)">
    <br>
    <h2>Select Image of Food</h2>
    <input type="file" name="file"><br>
    <button type="submit" name="submit">Add new Food Product</button>


  </form>
<?php
echo '  <form action="includes/delete.php" method="POST">
    <h1>To delete Existing Products:</h1>
    <p>(NOTE: DONOT KEEP LESS THAN 4 Products.. This  may Cause Problem in FRONTEND)</p>
    <p>select items to delete</p>';
    $conn= mysqli_connect("localhost","root","","moontower_admins");
    $sql="select * from `food-details` ";
    $result=mysqli_query($conn,$sql);
  while (  $row=mysqli_fetch_assoc($result)
  ) {
  echo ' <div class="khana_ko_holder">
  <input type="hidden" name="deleteid" value="'.$row['id'].'">
    <input type="hidden" name="deletepic" value="'.$row['imagename'].'">
        <img src="image-for-food/'.$row['imagename'].'" alt="food at hotel moontower inn">
        <div class="white_box_holder">

<button type="submit" name="submit" style="background:red">DELETE THIS PRODUCT</button>
  				<p>
  				'.$row['productname'].'
  				<h1>
  				'.$row['productprice'].'
  				</h1>
  				</p>
  				</div>
    </div>';
  }

          ?>
  </form>


</div>

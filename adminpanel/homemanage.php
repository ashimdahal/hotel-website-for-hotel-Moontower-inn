<?php
include "page_secure.php";
 ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
  <title>Home page editor</title>
  <style media="screen">
    .d-flex{
      width: 100%;

    }
    form{
      width: 48%;
      box-shadow: 0px 0px 15px 0px red;
      margin-top: 10px;
    }
    a{
      margin-left: 15px;
    }
  </style>
  <a href="admin_dashboard.php">Go back</a>
<div class="d-flex justify-content-around flex-wrap">


          <?php
          $conn  = mysqli_connect("localhost","root","","moontower_admins");
          $sql="select * from `home-images-homepage`";
          $result=mysqli_query($conn,$sql);
          $row=mysqli_fetch_assoc($result);


          echo '  <form action="includes/homepage-upload.php" method="POST" enctype="multipart/form-data">
              <h1>To change the moving image:</h1>

            <input type="file" name="file"/>

            <br>

            <input type="hidden" name="determiner" value="bg-img">
              <input type="hidden" name="deleteval" value="'.$row['background-1'].'">
            <button type="submit" name="submit">Upload</button>
          </form>



            <form action="includes/homepage-upload.php" method="POST" enctype="multipart/form-data">
              <h1>To change the image of first room</h1>
              <input type="hidden" name="deleteval" value="'.$row['room-1'].'">

            <input type="file" name="file"/>
            <input type="hidden" name="determiner" value="room1">

            <br>
            <button type="submit" name="submit">Upload</button>
            </form>





            <form action="includes/homepage-upload.php" method="POST" enctype="multipart/form-data">
              <h1>To change the image of room2:</h1>
              <input type="hidden" name="determiner" value="room2">
<input type="hidden" name="deleteval" value="'.$row['room-2'].'">

            <input type="file" name="file"/>

            <br>
            <button type="submit" name="submit">Upload</button>
            </form>





            <form action="includes/homepage-upload.php" method="POST" enctype="multipart/form-data">
              <h1>To change the image of room3:</h1>
              <input type="hidden" name="deleteval" value="'.$row['room-3'].'">

            <input type="file" name="file"/>
            <input type="hidden" name="determiner" value="room3">
            <br>
            <button type="submit" name="submit">Upload</button>
            </form>




            <form action="includes/homepage-upload.php" method="POST" enctype="multipart/form-data">
              <h1>To change the image of room4</h1>
              <input type="hidden" name="deleteval" value="'.$row['room-4'].'">

            <input type="file" name="file"/>
            <input type="hidden" name="determiner" value="room4">
            <br>
            <button type="submit" name="submit">Upload</button>
            </form>





            <form action="includes/homepage-upload.php" method="POST" enctype="multipart/form-data">
              <h1>To change the Bar image:</h1>
              <input type="hidden" name="deleteval" value="'.$row['bar'].'">

            <input type="file" name="file"/>
            <input type="hidden" name="determiner" value="barimg">


            <br>
            <button type="submit" name="submit">Upload</button>
            </form>





            <form action="includes/homepage-upload.php" method="POST" enctype="multipart/form-data">
              <h1>To change the food1  image:</h1>

            <input type="file" name="file"/>
            <input type="hidden" name="determiner" value="food1">


            <br>
            <button type="submit" name="submit">Upload</button>
            </form>

            <form action="includes/homepage-upload.php" method="POST" enctype="multipart/form-data">
              <h1>To change the food2 image:</h1>

            <input type="file" name="file"/>

            <input type="hidden" name="determiner" value="food2">

            <br>
            <button type="submit" name="submit">Upload</button>
            </form>

            <form action="includes/homepage-upload.php" method="POST" enctype="multipart/form-data">
              <h1>To change the food3  image:</h1>

            <input type="file" name="file"/>
            <input type="hidden" name="determiner" value="food3">


            <br>
            <button type="submit" name="submit">Upload</button>
            </form>

            <form action="includes/homepage-upload.php" method="POST" enctype="multipart/form-data">
              <h1>To change the food4 image:</h1>

            <input type="file" name="file"/>

            <input type="hidden" name="determiner" value="food4">

            <br>
            <button type="submit" name="submit">Upload</button>
            </form>




            <form action="includes/homepage-upload.php" method="POST" enctype="multipart/form-data">
              <h1>To change the Resturant image:</h1>

            <input type="file" name="file"/>
            <input type="hidden" name="determiner" value="resturant">


            <br>
            <button type="submit" name="submit">Upload</button>
            </form>'; ?>



            </div>


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
      width: 70%;
      height: 50vh;
      margin: 4px;
      font-size: 20px;
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

<title>about Page Management</title>
  <a href="admin_dashboard.php">Go back</a>

<div class="d-flex justify-content-around flex-wrap">
  <form action="includes/about.php" method="POST" enctype="multipart/form-data">
    <h1>Edit the text</h1>
<textarea name="paragaph" rows="8" cols="80" placeholder="Enter new details"></textarea>

    <button type="submit" name="submit">Update</button>


  </form>

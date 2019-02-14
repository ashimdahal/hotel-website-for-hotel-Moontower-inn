
<?php
$conn= mysqli_connect("localhost","root","","moontower_admins");
$sql="select * from `home-images-homepage`";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
echo '
<div class="wrapper" style="background-image:url(adminpanel/image-for-homepage/'.$row['background-1'].');">
  <div class="kogo">
  <img src="all_img/logo.png"  alt="Moon Tower Inn (Birtamod) Logo"/>
  </div>

  <div class="caption">
        <span class="border">
                  WELCOME TO HOTEL MOONTOWER INN
        </span>
  </div>
</div>
<div class="center_text">
<div class="holder">
  <img src="adminpanel/image-for-homepage/'.$row['room-1'].'"   alt="rooms at hotel MOONTOWER INN" class="img-thumbnail">
  <img src="adminpanel/image-for-homepage/'.$row['room-2'].'"   alt="rooms at hotel MOONTOWER INN" class="img-thumbnail">
  <img src="adminpanel/image-for-homepage/'.$row['room-3'].'"   alt="rooms at hotel MOONTOWER INN" class="img-thumbnail">
  <img src="adminpanel/image-for-homepage/'.$row['room-4'].'"   alt="rooms at hotel MOONTOWER INN" class="img-thumbnail">

</div>
  <div class="x">
      Searching for <div class="br_on_mobile"> <br> </div> rooms? <br>
      <a href="rooms.php">Book now! <br> Before all rooms are Packed</a>
      <h3>Only For <br> RS. 2000  </h3>
      <h4>WI-FI  ->&#9989; <div class="br_on_mobile"> <br> </div> AC  -> &#9989; <br> Hygiene ->&#9989; Attached Washrooms->&#9989; </h4>



    </div>
</div>


<div class="wrapper2" style="background-image:url(adminpanel/image-for-homepage/'.$row['bar'].');">

</div>
<div class="caption2">
      <span class="border2">
                TOP QUALITY BARS TO ENJOY YOUR HOLIDAYS!
      </span>
</div>
<div class="food_menu_in_home">


<div class="d-flex justify-content-start"  >


<div style="height:98%;background-size:cover;width:200px;margin:2px;" >
<img src="adminpanel/image-for-homepage/'.$row['food-1'].'" alt="Momo at hotel moontower inn" class="khana">
  </div>
  <div style="height:98%;background-size:cover;width:200px;margin:2px;" >
<img src="adminpanel/image-for-homepage/'.$row['food-2'].'" alt="rice at hotel moontower inn" class="khana">
  </div>
  <div style="height:98%;background-size:cover;width:200px;margin:2px;" >
<img src="adminpanel/image-for-homepage/'.$row['food-3'].'" alt="sukuti at hotel moontower inn"  class="khana">
  </div>
<div style="height:98%;background-size:cover;width:200px;margin:2px;">
  <img src="adminpanel/image-for-homepage/'.$row['food-4'].'" alt="chowmin at hotel moontower inn"   class="khana">
  </div>

</div>


<div class="y"> <a href="food.php">Click Here</a> <br>     to see Whats so special <br> about our food
<br> </div>
<div class="h3">Taste &#9989; Quality &#9989; Hygiene &#9989;</div>
</div>

<div class="resturant_looks_at_home_page" style="background-image:url(adminpanel/image-for-homepage/'.$row['resturant'].');">
  <div class="caption3">
        <span class="border3">
                  A GREAT PLACE FOR LUNCH AND DINNER!!
        </span>
  </div>
</div>';
 ?>


<script>


$('.wrapper').mousemove(function(e){

var mpagex = e.pageX
var mpagey = e.pageY


    if(mpagex > $('.wrapper').width()/2){
    $('.wrapper').css('background-position','right')
    }else if(mpagex < $('.wrapper').width()/2){
    $('.wrapper').css('background-position','left')
    }

    });



</script>

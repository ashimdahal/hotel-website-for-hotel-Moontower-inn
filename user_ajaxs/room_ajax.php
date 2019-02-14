<?php 

if(isset($_POST['check_avaibility'])){
$conn = mysqli_connect('localhost','root','','moontower_admins');
$total = $_POST['total_people'];
$sql = "SELECT * FROM available_rooms_criteria";
$result = mysqli_query($conn,$sql);

$check = mysqli_num_rows($result);
if($check > 0){
while($row = mysqli_fetch_assoc($result)){
$checkin = json_decode($row['checkin_date']);
$checkout = json_decode($row['checkout_date']);
$people = $row['total_people'];

//if(in_array(value,range))
if(in_array(strtotime($_POST['check_in']), range(strtotime($checkin[0]),strtotime($checkin[1])))&& in_array(strtotime($_POST['check_out']), range(strtotime($checkout[0]),strtotime($checkout[1])))){
  if($total<= $people){
  	echo(json_encode([$checkin[0],$checkin[1]])).'}';
  	echo(json_encode([$checkout[0],$checkout[1]])).'<>';
  	echo "Your Room is Available";
  }else{
  	echo "Your Room is not available on this criteria of ".$total." People Only Available For ".$people."";
  }
	

}else{
		echo "Your Room is not available on this date criteria try diffrent date";
}
}
}else{
	echo "No Data Found";
}
}





if(isset($_POST['getrooms'])){

$roomchin = $_POST['roomchin'];
$roomchout =  $_POST['roomchout'];
  $forcookie = $_POST['roomchin'].','.$_POST['roomchout'];
  $conn = mysqli_connect('localhost','root','','moontower_admins');
$sql = "SELECT * FROM rooms WHERE room_checkin ='$roomchin' and room_checkout = '$roomchout'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
  $jsondecoded_img = json_decode($row['room_images']);
  $room_cat = $row['room_cat'];
  $room_descip = $row['short_description'];
    $discount = $row['discount_available'];
  $roommp = $row['room_price'];
  $room_descip = substr($row['short_description'],0,35).'...';
  $extraoffer = $row['extra_offer'];
  if($discount != 0){
   $newprice = ($row['room_price'] - $discount/100 * $row['room_price']);
}

  echo "
<div class='my_rooms' style='cursor:pointer;float:left;margin-left:5%;margin-top:5%;'>
  <img src=".$jsondecoded_img[0]." style='height:300px;width:300px;'>
  <br><h4 style='font-family:Playfair Display, times, serif;font-size:35px;'>".$room_cat."</h4><br>
  ";
      if($discount == 0){
           echo"<p style='text-transform:uppercase!important;color:orange;font-size:22px;text-align:center;'>रू".$roommp."/per night</p>";
         }else{
                  echo"<p style='text-transform:uppercase!important;color:orange;font-size:22px;text-align:center;text-decoration:line-through;'>रू".$roommp."/per night</p>";
                          echo "<p style='text-transform:uppercase!important;color:orange;font-size:22px;text-align:center;'>रू".$newprice."/per night</p>";
                           echo "<p style='text-transform:uppercase!important;color:orange;font-size:22px;text-align:center;color:Red;'>@Discount of ".$discount."%</p>";
         }
  echo"</div>";

}
setcookie('chav','200',time()+(86400),"/");
setcookie('chav_in_out',$forcookie,time()+(86400),"/");


}




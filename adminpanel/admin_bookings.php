<?php
include 'page_secure.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Your Rooms</title>
	<link href="https://fonts.googleapis.com/css?family=Abel|Raleway|Staatliches" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- JQUERY-->
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="../bootstrap/room_manage.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>
<body>

<header>Bookings By The Customers<br><br></header>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Photo</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Rerserver's Age</th>
      <th scope="col">Rerserver's Contact</th>
      <th scope="col">Total Rooms Demanded</th>
      <th scope="col">Total People Coming</th>
      <th scope="col">Check-In</th>
      <th scope="col">Check-Out</th>
       <th scope="col">Room Demanded</th>
    </tr>
  </thead>
  <tbody>
   <?php 
$conn = mysqli_connect('localhost','root','','moontower_admins');
$sql = "SELECT * FROM  reservations_req";
$result = mysqli_query($conn,$sql);
$check = mysqli_num_rows($result);
if($check > 0){
	while ($row = mysqli_fetch_assoc($result)) {
echo'<tr>
      <td scope="col">#</td>
      <td scope="col"><img src="../'.$row['pphoto'].'" height="90px"></td>
      <td scope="col">'.$row['fname'].'</td>
      <td scope="col">'.$row['lname'].'</td>
      <td scope="col">'.$row['rage'].'</td>
      <td scope="col">'.$row['cno'].'</td>
      <td scope="col">'.$row['no_rooms'].'</td>
      <td scope="col">'.$row['total_people'].'</td>
      <td scope="col">'.$row['checkin'].'</td>
      <td scope="col">'.$row['checkout'].'</td>
       <td scope="col">';
       if($row['room_code'] != 'Random'){
$sql2 = "SELECT * FROM  rooms WHERE room_code = '".$row['room_code']."'";
$result2 = mysqli_query($conn,$sql2);
while($row2 = mysqli_fetch_assoc($result2)){
	$roomimage = json_decode($row2['room_images']);
	$room_cat = $row2['room_cat'];
	if($row2['discount_available'] == 0){
$room_price = $row2['room_price'];
	}else{
	$room_price = ($row2['room_price'] - $row2['discount_available']/100 * $row2['room_price']).'(With Discount of '.$row2['discount_available'].' )';	
	}
echo "
".$room_cat."(Rs.".$room_price.")<br>
<img src='../".$roomimage[0]."'' height='90px'>";

	
}
       }else{
       	echo "Random";
       }

       echo'</td>
    </tr>';
	}



}else{
	echo "No Users Bookings";
}




    ?>
    </tbody>
</table>
</body>
</html>
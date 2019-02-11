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
  	echo(json_encode([$checkin[0],$checkin[1]])).',';
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




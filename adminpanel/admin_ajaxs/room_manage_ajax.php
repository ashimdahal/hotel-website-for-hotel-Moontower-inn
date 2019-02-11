<?php 

 date_default_timezone_set('Asia/Kathmandu');
 if(isset($_POST['add_criteria']) || isset($_POST['update_criteria'])){
$conn = mysqli_connect('localhost','root','','moontower_admins');
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$total_p = $_POST['t_p'];
$date = date('Y-m-d');
if(!isset($_POST['update_criteria'])){
$sql = "INSERT INTO available_rooms_criteria(checkin_date,checkout_date,total_people,added_date) VALUES('
$checkin','$checkout','$total_p','$date')";
}else{
	$order = $_POST['order'];
	$sql = "UPDATE  available_rooms_criteria SET checkin_date='$checkin',checkout_date='$checkout',
	total_people='$total_p' WHERE id='$order'";
}
$result = mysqli_query($conn,$sql);
if($result){
	echo "You added a date and person criteria";
}else{
	echo "ERROR!";
}


 }

 if(isset($_POST['delete_criteria'])){

 	$order = $_POST['order'];
 	$conn = mysqli_connect('localhost','root','','moontower_admins');
 	$sql = "DELETE FROM available_rooms_criteria WHERE id='$order'";
 	$result = mysqli_query($conn,$sql);
 	if($result){
 		echo "Deleted Sucessfully!";
 	}


 }

if(isset($_POST['room_ajax'])){
	$conn = mysqli_connect('localhost','root','','moontower_admins');
	$room_cat = mysqli_real_escape_string($conn,$_POST['room_cat']);
	$room_cap = mysqli_real_escape_string($conn,$_POST['room_cap']);
	$room_avail = mysqli_real_escape_string($conn,$_POST['room_avail']);
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$price = mysqli_real_escape_string($conn,$_POST['price']);
	$extra_offer = mysqli_real_escape_string($conn,$_POST['extra_offer']);
	if(empty($extra_offer)){
		$extra_offer = "No";
	}
	$prom_code = mysqli_real_escape_string($conn,$_POST['prom_code']);
	$discount = mysqli_real_escape_string($conn,$_POST['discount']);
	$best_peice = mysqli_real_escape_string($conn,$_POST['best_peice']);
	$descrip = mysqli_real_escape_string($conn,$_POST['descrip']);
	$uniq_code = uniqid('',true);
	
foreach ($_FILES['file']['name'] as $key => $value) {
$fileext = explode('.',$value);
$fileext = end($fileext);
$file_tmp_name = $_FILES['file']['tmp_name'][$key];
$newfilename = $uniq_code.'_'.($key+1).'.'.$fileext;
$filedir = '../../room_files/'.$newfilename;
$forarray ='room_files/'.$newfilename;
$files[] = $forarray;
move_uploaded_file($file_tmp_name, $filedir);	
}
$filestrings = json_encode($files);
$date = date('Y-m-d h:i:s');
$sql = "INSERT INTO rooms(room_cat, room_capacity, available_such_rooms, room_checkin, room_checkout, room_images,room_price, extra_offer, promo_code, discount_available, short_description, room_code, best_peice, added_date) VALUES (
'".$room_cat."','".$room_cap."','".$room_avail."','".$checkin."','".$checkout."','".$filestrings."','".$price."
','".$extra_offer."','".$prom_code."','".$discount."','".$descrip."','".$uniq_code."','".$best_peice."','".$date."')";
$result = mysqli_query($conn,$sql);
if($result){
	echo 'Your Room Published . Sucessfully !!';
}else{
	echo "Oppsy ! Room not Published Refresh and Try Again !!";
}

}


if(isset($_POST['room_delete'])){
		$conn = mysqli_connect('localhost','root','','moontower_admins');
	$roomcode = $_POST['room_code'];
$sql = "SELECT * FROM rooms WHERE room_code='$roomcode'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
	$image_encoded = json_decode($row['room_images']);
	foreach ($image_encoded as $key => $value) {
	unlink('../../'.$image_encoded[$key]);
	}

}
$sql2 = "DELETE FROM rooms WHERE room_code='$roomcode'";
$result2 =mysqli_query($conn,$sql2);
if($result2){
	echo "Your Room Deleted";
}

}











<?php 
if(isset($_POST['cancel'])){
	$forcookie = "";

	  $conn = mysqli_connect('localhost','root','','moontower_admins');
	$user_code = $_POST['user_code'];
	$sql = "DELETE FROM  reservations_req WHERE user_code='$user_code'";
	$result = mysqli_query($conn,$sql);
if($result){
		$cookie = explode(',',$_COOKIE['booked_user_code']);
		foreach ($cookie as $key => $value) {
			if($user_code == $value){
				unset($cookie[$key]);
			}
		}
		foreach ($cookie as $key => $value) {
			$forcookie = $forcookie.$cookie[$key].',';
		}

		setcookie('booked_user_code',$forcookie,time()+(86400*30),'/');
		echo "Booking Canceled - Thank You , Please Book Us Again";
	}
	
}
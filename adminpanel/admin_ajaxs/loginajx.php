<?php 

 date_default_timezone_set('Asia/Kathmandu');
 if(isset($_POST['login'])){
session_start();
$conn = mysqli_connect('localhost','root','','moontower_admins');
$uname = mysqli_real_escape_string($conn,$_POST['uname']);
$password = mysqli_real_escape_string($conn,$_POST['pwd']);
$rem_me = $_POST['rem'];

$sql = "SELECT * FROM admins_users WHERE uname='$uname' and password='$password'";
$result = mysqli_query($conn,$sql);
$check = mysqli_num_rows($result);
if($check == 0){
	echo "<p class='response' style='color:red;font-family:monospace;'>Invalid Username and Password</p>";
}else{
	echo "<p class='response' style='color:red;font-family:monospace;'>You are Siggned In</p>";
	if($rem_me == 'Yes'){
		$date = date('Y-m-d h:i:s');
		$sql2 = "UPDATE admins_users SET last_login = '$date' WHERE uname='$uname'";
$result2 = mysqli_query($conn,$sql2);
		setcookie('adm_un',$uname,time()+(86400 * 30),"/");

	}else{
		$date = date('Y-m-d h:i:s');
		$sql2 = "UPDATE admins_users SET last_login = '$date' WHERE uname='$uname'";
$result2 = mysqli_query($conn,$sql2);
$_SESSION['adm_un']=$uname;
	}
}
}
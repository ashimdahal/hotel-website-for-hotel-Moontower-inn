<?php 
if(isset($_POST['add_admin'])){

$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
$post = $_POST['post'];
$date = date('Y-m-d');
$conn = mysqli_connect('localhost','root','','moontower_admins');
$sql  = "INSERT INTO admins_users(uname,password,company_post,added_date) VALUES('$uname','$pwd','$post','$date')";
$result = mysqli_query($conn,$sql);
if($result){
	echo "You added a new Admin";
}else{
	echo "Oppsy ! A error";
}
}
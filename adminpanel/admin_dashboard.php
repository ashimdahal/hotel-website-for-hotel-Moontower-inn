<?php 
include 'page_secure.php';
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Moon Tower Inn's Admin Page</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/admin_dash.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Raleway|Staatliches" rel="stylesheet">
</head>
<body>

	<?php 
$conn = mysqli_connect('localhost','root','','moontower_admins');
$sql = "SELECT * FROM admins_users WHERE uname='$savedsession'";
$result =  mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
	 $post = $row['company_post'];
	 $name = $row['uname'];

}

	 ?>

	 <div class="wrapper_of_homepage">
	 	
	 </div>

<div class="sidenav">
	<h5>Welcome , <?php echo $name; ?> ! </h5>
	<a href="admin_dashboard.php">Home</a>
	<?php if($post == 'Owner' || $post == 'Manager'){
		

		?>
  <a href="employees_manage.php">Add , Remove <br>Promote Employees</a>
<?php } ?>
  <a href="room_manage.php?id=1">Manage Rooms</a>
  <a href="#clients">Manage Travel Tourism</a>
  <a href="#contact">Booking Payments and Customers</a>
</div>
</body>
</html>
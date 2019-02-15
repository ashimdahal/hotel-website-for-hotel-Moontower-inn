
<?php
 include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome To Our Rooms</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/bookings.css">
</head>
<body>
<div class='jumbtron'>
	<?php 

if(!isset($_COOKIE['booked_user_code'])){

?>
	<h2 class='caption_1'>Sorry, No Bookings Found</h2>
<?php }else{ ?>
<h2 class='caption_1'>Check Your Bookings</h2>
<?php }?>

</div>
<br>
<center><p class='response'></p></center>
<?php

if(isset($_COOKIE['booked_user_code'])){
	date_default_timezone_set('Asia/Kathmandu');

$exploded_cookie = explode(',',$_COOKIE['booked_user_code']);
echo '<br><br><table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Check In</th>
      <th scope="col">Check Out</th>
      <th scope="col">Total People</th>
      <th scope="col">Total Rooms Demanded</th>
      <th scope="col">Booked At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead><tbody>';

foreach ($exploded_cookie as $key => $value) {
		

	$conn = mysqli_connect('localhost','root','','moontower_admins');
	$sql = "SELECT * FROM reservations_req WHERE user_code ='$value'";
	$result = mysqli_query($conn,$sql);
	$check = mysqli_num_rows($result);
	$date = Date('Y-m-d');
	

	if($check > 0){
while ($row = mysqli_fetch_assoc($result)) {

	$choutdate = $row['checkout'];
	$chout_dateminused_1 = date('Y-m-d',strtotime('-2 day',strtotime($date)));


		echo '
    <tr>
      <th scope="row">'.($key+1).'</th>
      <td>@'.$row['checkin'].'</td>
      <td>@'.$row['checkout'].'</td>
      <td>'.$row['total_people'].' People</td>
      <td>'.$row['no_rooms'].' Room</td>
      <td>'.$row['added_date'].'</td>
      <td class="button_data" style="height:20px;">
      ';
      if(strtotime($date) == strtotime($chout_dateminused_1)){
echo'<button class="uncancel btn btn-danger disabled" style="font-size:10px">Cancel Bookings
          <input type="hidden" value='.$value.'></button>';
      }else{
      	echo'<div><button class="cancel btn btn-danger" style="font-size:10px">Cancel Bookings
          <input type="hidden" value='.$value.'></button>
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle" style="color:#000;">Are You Sure To Cancel This Booking?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="button" class="yes btn btn-primary">YES
        <input type="hidden" value='.$value.'></button>
      </div>
    </div>
  </div>
</div>
          <div>';

      }

    echo'</tr>';
}


	}else{

	}
	
	
}

echo '  </tbody>
</table><br><br>
<p class="notice" style="color:#aaa;font-family:Raleway;text-align:center;">Note : You can only cancel or edit your bookings till 2 day before of your Check Out Date</p>';

 

?>
<script>
	$('.cancel').click(function(){
		
		$(this).parent().find('.modal').modal('show');
		$('.yes').click(function(){
			var user_code  = $(this).find('input').val();
			$.post("user_ajaxs/book_ajax.php",{user_code:user_code,cancel:"200"},function(data){
			
$('.modal').modal('hide')
$('.response').html(data);

setTimeout(function(){
$('.response').html('');	
})
			})

		})

	})

</script>
<?php }?>
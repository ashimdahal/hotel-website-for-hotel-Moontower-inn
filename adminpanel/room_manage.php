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

<header>Manage Your Room Avaibility,Room Categories<br><br></header>
<div class="card text-white bg-info mb-3">
  <div class="card-header">Manage Your Room Avaibility</div>
  <div class="card-body">
    <h5 class="card-title">Keep a Range of Check In,Check Out Dates Available For Room Bookings</h5>
    <p class="card-text">
    	<h5>Check in Date</h5>
    	<input type="date" class="from_chck_in">
    	To
    	<input type="date" class="to_chck_in"><br><br>
    	<h5>Check Out Date</h5>
    	<input type="date" class="from_chck_out">
    	To
    	<input type="date" class="to_chck_out"><br><br>
    	<h5>Total People</h5>
  <input type="number" class="total_people"><br><br>
  <button class='add_date btn btn-secondary'>Submit this critearea</button><br>
<p class='add_respnse' style='color:green;font-family: Raleway;'></p>

    </p>
  </div>

</div>
<div class="card bg-light mb-3" style="float:right;position: absolute;left:-5%;top:25%;max-width: 18rem;">
  <div class="card-header">Some Dates</div>
  <div class="card-body">
    <h5 class="card-title">Manage Dates  and People Criteria</h5>
    <p class="card-text">
    	<?php 
    	$id = $_GET['id'];
    	$conn = mysqli_connect('localhost','root','','moontower_admins');
$sql = "SELECT * FROM available_rooms_criteria WHERE id='$id'";
$sql2 = "SELECT * FROM available_rooms_criteria";
$result2 = mysqli_query($conn,$sql2);
while($row2 = mysqli_fetch_assoc($result2)){
$order_count = $row2['id'];
}

$result = mysqli_query($conn,$sql);
$key = 0;
while($row = mysqli_fetch_assoc($result)){
	$checkin_date_array = json_decode($row['checkin_date'],true);
	$checkin_from = $checkin_date_array[0];
	$checkin_to = $checkin_date_array[1];
	
$order = $row['id'];
	$checkout_date_array = json_decode($row['checkout_date'],true);
	$checkout_from = $checkout_date_array[0];
	$checkout_to = $checkout_date_array[1];

	$total_people = $row['total_people'];


	echo "<div class='container'>".$id.".
     Check in Dates :<br>
     From : ".$checkin_from."<span class='checkinfrm'><input type='date' style='display:none;' value=".$checkin_from."> <a  class='checkinfrom_edit' style='cursor:pointer;border-bottom:1px solid blue;color:blue;'>Edit</a></span><br>
     To: ".$checkin_to."<span class='checkinto'><input type='date' style='display:none;' value=".$checkin_to.">  <a  class='checkinto_edit' style='cursor:pointer;border-bottom:1px solid blue;color:blue;'>Edit</a></span> <br>
     Check Out Dates :<br>
     From : ".$checkout_from."<span class='checkoutfrm'><input type='date' style='display:none;' value=".$checkout_from.">   <a  class='checkoutfrom_edit'style='cursor:pointer;border-bottom:1px solid blue;color:blue;'>Edit</a></span><br>
     To: ".$checkout_to."<span class='checkoutto'>
     <input type='date' style='display:none;' value=".$checkout_to.">  <a class='' style='cursor:pointer;border-bottom:1px solid blue;color:blue;'>Edit</a></span><br>
     Total People:".$total_people."<span class='people_edit'> <input type='number' style='display:none;' value=".$total_people."><a  class='checkoutto_edit'style='cursor:pointer;border-bottom:1px solid blue;color:blue;'>Edit</a>
	</span>
	<button style='margin-top:1%;display:none;' value=".$order." class='save_chng btn btn-secondary'>Save Changes</button>
	<a  class='cancel_edit'style='cursor:pointer;display:none;color:red;'>Cancel</a>
	<br><a  class='delete_edit' value=".$order." style='margin-top:2%;cursor:pointer;display:block;color:red;'>Delete</a>
	<br><br></div>
";
	



}
echo "<button class='increment btn btn-primary'>Show More</button></a>";




    	?>


    </p>
  </div>
</div>
<br>
<div class="room_add card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item1">
        <a class="nav-link active">Rooms Infos</a>
      </li>
      <li class="nav-item2">
        <a class="nav-link" style="color:blue;cursor: pointer;">Rooms Visuals</a>
      </li>
      <li class="nav-item3">
        <a class="nav-link" style="color:blue;cursor: pointer;"  tabindex="-1" aria-disabled="true">Finish Up</a>
      </li>
       <li class="nav-item4">
        <a class="nav-link" style="color:blue;cursor: pointer;"  tabindex="-1" aria-disabled="true">Delete Existing Rooms</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
      <div class='fillings_inputs1' style='display: none;'>
        	<h5 class="card-title">Add your Room Types For Customers</h5>
    <p class="card-text">
    	<label for='room_cat'>Room Category Name</label>
    	<input class='form-control' id='room_cat'><br>
    	<label for='room_cap'>Room Total Person Capacity</label>
    	<input type='number' class='form-control' id='room_cap'>
    	<label for='room_avail'>Available Such Rooms</label>
    	<input type='number' class='form-control' id='room_avail'>
    	<label for='checkin_rng'>Check In Range For Room</label><br>
    	<select id="checkin_rng">
    		<option>None</option>
    		<?php 
$conn = mysqli_connect('localhost','root','','moontower_admins');
$sql = "SELECT * FROM available_rooms_criteria";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
$checkin = json_decode($row['checkin_date']);
echo "<option value=".$row['checkin_date'].">".$checkin[0]." To ".$checkin[1]."</option>";
}
    		 ?>
    	</select><br>
    	<label for='checkout_rng'>Check Out Range For Room</label><br>
    	<select id="checkout_rng">
    		<option>None</option>
    		<?php 
$conn = mysqli_connect('localhost','root','','moontower_admins');
$sql = "SELECT * FROM available_rooms_criteria";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
$checkout = json_decode($row['checkout_date']);
echo "<option value=".$row['checkout_date'].">".$checkout[0]." To ".$checkout[1]."</option>";
}
    		
    		 ?>
    	</select><br>
    </p>
 
        	
        </div>

<div class='fillings_inputs2' style='display: none;'>
<h5 class="card-title">Add your Room Images or Videos</h5>
<label for='room_visual'>
	
	<img class='img_selector' src='quickadd.png' height='100px' style='cursor:pointer;'>
</label>
<input type='file' id='room_visual' style='display: none;'>
<div class='image_preview_cont'>
	</div>
</div>


<div class='fillings_inputs3' style='display: none;'>
<h5 class="card-title">Extra Information About Rooms</h5>
<p class="card-text">
	<label for='price'>Price for Room (Per Night)</label>
    	<input type='number' class='form-control' id='price'>
<label for='extra_offer'>Any Extra Offer (Example : Extra Bed @Rs.220)</label>
    	<input class='form-control' id='extra_offer'><br>
    	<label for='prom_code'>Promo Code For Room</label>
    	<input type='number' class='form-control' id='prom_code'>
    	<label for='discount'>Discount if Availabel(In Percentage)</label>
    	<input type='number' class='form-control' id='discount'>

    	 	<label for='best_peice'>Should This Room Should be Shown First (Yes/No)</label>
    	<input type='text' class='form-control' id='best_peice'>
    	<label for='description'>Short Description Of Room</label>
    	<textarea id='description' class='form-control'></textarea>
    	<br><button class='publish btn btn-primary'>Publish Your Room</button>


</p>
	</div>
	<div class='fillings_inputs4' style='display: none;'>
		<h5 class="card-title">Delete Non-Existed Rooms</h5>
		<?php
	$conn = mysqli_connect('localhost','root','','moontower_admins');
$sql = "SELECT * FROM rooms";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
	 $uniq_code= $row['room_code'];
	$image_encoded =json_decode($row['room_images']);

	$images = $image_encoded[0];
	echo '<input type="radio" name="sd" value='.$uniq_code.'>
	<image height="100px" src="../'.$images.'"><br>';
	# code...
}
echo "<br><br><button class='delete_room-btn btn btn-warning'>Delete Selected</button>";

		 ?>

	</div>
</div>

  </div>
</div>

<script>

$('.delete_room-btn').click(function(){
	var invalid = 0;
	$('.fillings_inputs4').find('input[type="radio"]:checked').each(function(){
		invalid ++;
})

if(invalid > 0){
$.post("admin_ajaxs/room_manage_ajax.php",{
	room_code: $('input[type="radio"]:checked').val(),
	room_delete : "200"
},function(data){
	alert(data)
})
}
});
$('.nav-item4').find('.nav-link').click(function(){

	$('.nav-item4').find('.nav-link').attr('class','nav-link active');
		$('.nav-item4').find('.nav-link').css('color','#fff');
		$('.nav-item2').find('.nav-link').attr('class','nav-link');
		$('.nav-item2').find('.nav-link').css('color','blue');
			$('.nav-item3').find('.nav-link').attr('class','nav-link');
		$('.nav-item3').find('.nav-link').css('color','blue');
			$('.nav-item1').find('.nav-link').attr('class','nav-link');
		$('.nav-item1').find('.nav-link').css('color','blue');

		$('.fillings_inputs1').css('display','none')
		$('.fillings_inputs2').css('display','none')
		$('.fillings_inputs3').css('display','none')
			$('.fillings_inputs4').css('display','block')



})


var fd = new FormData;
var afiles = [];

$('.fillings_inputs3').find('button').click(function(){
	var invalid = 0;
	$('.fillings_inputs3').find('input[type="text"],#price,textarea').each(function(){
		if($(this).val() == 'None' ||$.trim($(this).val()).length == 0){
			$('.card-body').find(this).css('border','1px solid red')
			invalid++;
		}else{
			$(this).css('border','')
		}
	})

	if(invalid == 0){
var room_cat = $('.fillings_inputs1').find('#room_cat').val()
var room_cap = $('.fillings_inputs1').find('#room_cap').val()
var room_avail = $('.fillings_inputs1').find('#room_avail').val()
var checkin = $('.fillings_inputs1').find('#checkin_rng').val()
var checkout = $('.fillings_inputs1').find('#checkout_rng').val()
var file_keys = 0;
$('.fillings_inputs2').find('.image_preview_cont').find('.prev_images').each(function(){
	file_keys++;
})
for(i=0;i<=file_keys;i++){
fd.append('file[]',afiles[i])
}
var price = $('.fillings_inputs3').find('#price').val()
var extra_offer = $('.fillings_inputs3').find('#extra_offer').val()
var prom_code = $('.fillings_inputs3').find('#prom_code').val()
var discount = $('.fillings_inputs3').find('#discount').val()
var best_peice = $('.fillings_inputs3').find('#best_peice').val() 
var descrip = $('.fillings_inputs3').find('#description').val()

fd.append('room_ajax',"200");

fd.append('room_cat',room_cat);
fd.append('room_cap',room_cap);
fd.append('room_avail',room_avail);
fd.append('checkin',checkin);
fd.append('checkout',checkout);
fd.append('price',price);
fd.append('extra_offer',extra_offer);
fd.append('prom_code',prom_code);
fd.append('discount',discount)
fd.append('best_peice',best_peice);
fd.append('descrip',descrip);


		$.ajax({
  url : 'admin_ajaxs/room_manage_ajax.php',
  data:fd,
  processData: false,
  contentType: false,
  type: 'POST',
  success: function(data){

alert(data)
  
  }
})
	}

})

$('.nav-item3').find('.nav-link').click(function(){
	var invalid = 0;
		if(afiles.length == 0){
			$('.card-body').find('.img_selector').css('border','3px solid red')
			$('.card-body').find('.img_selector').css('border-radius','50%')
		invalid++;
		}else{
			$('.card-body').find('.img_selector').css('border','')
			$('.card-body').find('.img_selector').css('border-radius','')
		}

	if(invalid == 0){
		$('.nav-item3').find('.nav-link').attr('class','nav-link active');
		$('.nav-item3').find('.nav-link').css('color','#fff');
		$('.nav-item2').find('.nav-link').attr('class','nav-link');
		$('.nav-item2').find('.nav-link').css('color','blue');
	$('.fillings_inputs2').css('display','none');
	$('.fillings_inputs3').css('display','block');
	}
})

function prev_img(input,fd,afiles,countimage){
var key = 0;
 var reader = new FileReader();
 reader.readAsDataURL(input.files[0])

 reader.onload = function(e){
   var type = input.files[0].type.split('/');
   var ftype = type[0]
  if(ftype == 'video'){
    $('.image_preview_cont').append('<div class="prev_images" style="float:left;position: relative;top:0px;" ><input type="hidden" class="file_key" value='+countimage+'><video  height="100px" width="100px"  controls><source type='+input.files[0].type+' src='+e.currentTarget.result+'></video><span style="cursor:pointer;    position: relative;top: -85px; color: #fff;border-radius: 40%;background: black;"  class="close_btn">&times</span></div><script>$(".close_btn").click(function(){afiles.splice(($(this).parent().find(".file_key").val()-1),1);$(this).parent().remove()})');
afiles.push(input.files[0])
  }else if(ftype == 'image'){
    $('.image_preview_cont').append('<div style="float:left;" class="prev_images"><input type="hidden" class="file_key" value='+countimage+'><image  height="100px" width="100px" src='+e.currentTarget.result+'><span style="    position: relative;top: -45px;    color: #fff;cursor:pointer;border-radius: 40%;background: black;"  class="close_btn">&times</span></div><script>$(".close_btn").click(function(){afiles.splice(($(this).parent().find(".file_key").val()-1),1);$(this).parent().remove()})')
afiles.push(input.files[0])
  }
 }

}
$('.fillings_inputs2').find('input[type="file"]').on('change',function(){
	prev_img(this,countimage,afiles,fd)
	    var countimage = 1;
$('.prev_images').each(function(){
countimage++;

})
})
	
$('.nav-item1').find('.nav-link').click(function(){
	var invalid = 0;
	/*$('.fillings_inputs2').find('input,select').each(function(){
		if($(this).val() == 'None' ||$.trim($(this).val()).length == 0){
			//$('.card-body').find(this).css('border','1px solid red')
			//invalid++;
		}else{
			$(this).css('border','')
		}
	})*/

	if(invalid == 0){
		$('.nav-item1').find('.nav-link').attr('class','nav-link active');
		$('.nav-item1').find('.nav-link').css('color','#fff');
		$('.nav-item2').find('.nav-link').attr('class','nav-link');
		$('.nav-item2').find('.nav-link').css('color','blue');
	$('.fillings_inputs2').css('display','none');
	$('.fillings_inputs3').css('display','none');
	$('.fillings_inputs1').css('display','block');
	}
})


$('.nav-item2').find('.nav-link').click(function(){
	var invalid = 0;
	$('.fillings_inputs1').find('input,select').each(function(){
		if($(this).val() == 'None' ||$.trim($(this).val()).length == 0){
			$('.card-body').find(this).css('border','1px solid red')
			invalid++;
		}else{
			$(this).css('border','')
		}
	})

	if(invalid == 0){
		$('.nav-item2').find('.nav-link').attr('class','nav-link active');
		$('.nav-item2').find('.nav-link').css('color','#fff');
		$('.nav-item1').find('.nav-link').attr('class','nav-link');
		$('.nav-item1').find('.nav-link').css('color','blue');
	$('.fillings_inputs1').css('display','none');
	$('.fillings_inputs2').css('display','block');
	$('.fillings_inputs3').css('display','none');
	}
})


$(document).ready(function(){
	$('.fillings_inputs1').css('display','block');
})



	var newkey = "1";
	$('.increment').click(function(){

		
		

		window.location.href = 'room_manage.php?id='+<?php if(($id+1) >$order_count){echo 1;}else{echo($id+1);};?>+'';

	})
	$('.delete_edit').click(function(){
		var order = $(this).attr('value');
		$.post("admin_ajaxs/room_manage_ajax.php",{
					order : order,
					delete_criteria : "200"

				},function(data){
					alert(data)
				})
	})
	$('.save_chng').click(function(){
		var invalid = 0;
		$(this).parent().find('input').each(function(){
			
			if($(this).css('display') == 'block'){
			if($.trim($(this).val()).length == 0){
				invalid++;
				$(this).css('border','1px solid red');
			}else{
				$(this).css('border','');
			}
		}
		})

		if(invalid == 0){
			var checkin = []
				checkin.push($(this).parent().find(".checkinfrm").find('input').val())
				checkin.push($(this).parent().find(".checkinto").find('input').val())
		    var checkout = []
		    checkout.push($(this).parent().find(".checkoutfrm").find('input').val())
				checkout.push($(this).parent().find(".checkoutto").find('input').val())
				var people = $(this).parent().find(".people_edit").find('input').val()
				var order = $(this).attr('value')

				$.post("admin_ajaxs/room_manage_ajax.php",{
					checkin : JSON.stringify(checkin),
					checkout : JSON.stringify(checkout),
					order : order,
					t_p : people,
					update_criteria : "200"

				},function(data){
alert('Changes Saved Sucessfully !')
				})
			}
	})
	$('a:not(".cancel_edit,.delete_edit")').click(function(){
		$(this).parent().find('input').css('display','block')
		$(this).parent().parent().find('.save_chng').css('display','block')
		$(this).parent().parent().find('.cancel_edit').css('display','block')

	})
	$('.cancel_edit').click(function(){
		$(this).parent().find('input').each(function(){
			$(this).css('display','none')
		})
		$(this).parent().find('button').each(function(){
			$(this).css('display','none')
		})
		$(this).css('display','none')
	})
	$('.add_date').click(function(){

		var invalid = 0;
		$(this).parent().find('input').each(function(){
			if($.trim($(this).val()).length == 0){
				$(this).css('border','2px solid red');
				invalid++;
			}else{
				$(this).css('border','');
			}
		})
		if(invalid == 0){

		var checkin_date = []
		var checkout_date = []
		var people = $('.total_people').val()


		checkin_date.push($('.from_chck_in').val());
		checkin_date.push($('.to_chck_in').val());
		checkout_date.push($('.from_chck_out').val());
		checkout_date.push($('.to_chck_out').val());

	$.post("admin_ajaxs/room_manage_ajax.php",{
		add_criteria : "200",
checkin : JSON.stringify(checkin_date),
checkout : JSON.stringify(checkout_date),
t_p : people
	},function(data){
$('.add_respnse').html(data)
	});	
}
		


	})
</script>


</body>
</html>
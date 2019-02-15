<?php
 include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome To Our Rooms</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/room.css">
</head>
<body>
<div class='jumbtron'>
	<h2 class='caption_1'>Check Our Rooms</h2>
	<div class='avaibility_check'>
		<div class='user_input_cont'>
		<label style="position:relative;left:4%;" for='check_in'>Check In ?</label>
		<input type='date' id='check_in'>
		<label style="position:relative;left:4%;" for='check_out'>Check Out ?</label>
		<input type='date' id='check_out'>
		<label for='adults_count'>Adults</label>
		<select id='adults_count'>
			<?php
			for($i=0;$i<=6;$i++){
				echo "<option>".$i."</option>";
			}
			echo "<option>6+</option>";

			 ?>
		</select>
		<label for='childs_count'>Childrens</label>
		<select id='childs_count'>
			<?php
			for($i=0;$i<=6;$i++){
				echo "<option>".$i."</option>";
			}
			echo "<option>6+</option>";

			 ?>
		</select><br><br><br><br>
		<button class='chck_aval-btn'>Check Avaibility</button><br><br>
		<div class="response" style="
    background: black;
    width: 100%;
     height: 100%;
    margin-top: 20px;
    font-family: Raleway;
    font-weight: 800;
    color: lime;
    text-align: center;
    padding-top: 20px;
    display: none;
"></div>
</div>
</div>
</div>
<?php
$conn = mysqli_connect('localhost','root','','moontower_admins');
$sql = "SELECT * FROM rooms WHERE best_peice='Yes' LIMIT 4";
$result = mysqli_query($conn,$sql);
$check = mysqli_num_rows($result);
if($check > 0){
?>
<div class='best_peice_container'  >
<h2>The  , Rooms designed for you at its most <br>Welcomes You <span style='color:red;'>&hearts;</span></h2>
<div class='images_videos' style="position: relative;top:10px;">
<?php
while($row = mysqli_fetch_assoc($result)){
	$jsondecoded_img = json_decode($row['room_images']);
	//print_r($jsondecoded_img);
	$room_cat = $row['room_cat'];
	$room_cap = $row['room_capacity'];
	$room_code = $row['room_code'];
	$discount = $row['discount_available'];
	$roommp = $row['room_price'];
	$room_descip = substr($row['short_description'],0,35).'...';
	$extraoffer = $row['extra_offer'];
	if($discount != 0){
	 $newprice = ($row['room_price'] - $discount/100 * $row['room_price']);
}

	//$room_available = $row['']

		$extractext = explode('.',$jsondecoded_img[0]);


			echo "<div class='card_cont'><div class='card' data-toggle='tooltip' data-placement='top' title='Click me to know more !' value='".$jsondecoded_img[0]."''>

			
			<div class='images-flipped' style='height:200px;width:200px;background:#eee;'><p style='text-align:center;'> ".$room_cat."</p>
             <p style='font-size:16px;text-align:center;'>Room based on : ".$room_cap." people</p>
             ";
             if($discount == 0){
            echo"<p style='font-size:16px;text-align:center;'>रू".$roommp."";
         }else{
         	        echo"<p style='font-size:16px;text-align:center;text-decoration:line-through;'>रू".$roommp."</p>";
         	                echo "<p style='font-size:16px;text-align:center;'>रू".$newprice."</p>";
         	                 echo "<p style='font-size:16px;text-align:center;'>@Discount of ".$discount."%</p>";
         }
         if($extraoffer != 'No'){
  echo "<p style='font-size:16px;text-align:center;'>Extra offer of : ".$extraoffer."</p>";
         }
        echo "<p style='font-size:16px;text-align:center;'>Brief Description<br>
        ".$room_descip."</p>";

        echo "<center><button value='modal".$room_code."' data-toggle='modal' data-target='modal".$room_code."' class='view_more btn btn-warning'>View More</button>


";
   

        echo"
        </center>";

			echo"</div>
			<div class='images' id=room".$room_code." style='height:200px;width:200px;' height='200px'></div>";
		
			echo"
			</div>

";
	echo '<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">'.$room_cat.'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <h5 style="
    font-weight: 900;
    font-size: 20px;
    margin-bottom: 3%;
">Some Glances Of The Room</h5>
';
foreach ($jsondecoded_img as $key => $value) {
	$extractext = explode('.',$value);
	if($extractext[2] == 'mp4' || $extractext[2] == 'wmv'){
echo "<video style='height:200px;width:200px;' controls><source type='video/".$extractext[2]."' src=".$value."></video>";
	}else{
echo "<img style='height:200px;width:200px;' src=".$value.">";
	}
	
}
echo'
           </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="book_room_highlightroom btn btn-primary">Book This Room
        <input type="hidden" value='.$room_code.'></button>
      </div>
    </div>
  </div>
</div>';

			echo"</div>";




			
echo "<script>


			
$('.card').each(function(){
	var roomdir = $(this).attr('value')
$(this).css('background','url('+roomdir+')');
	})


</script>";
}
echo "</div>";


 } ?>
	</div>

<center><div class='some_glances' style="display:table;margin-top:25%;background: #fff;height:100%;">
	
	<h2 style='position:relative;width:35%;font-size:35px;font-family: monospace;border-bottom: 1.5px solid'>All of Our Rooms</h2>
<div class='room_containers' style='margin-top:5%'>
	<?php  
$conn = mysqli_connect('localhost','root','','moontower_admins');
$sql = "SELECT * FROM rooms";
$result = mysqli_query($conn,$sql);
$image_count = 0;
while($row = mysqli_fetch_assoc($result)){
$nondecode_img = $row['room_images'];
	$jsondecoded_img = json_decode($row['room_images']);
	$room_cat = $row['room_cat'];
	$room_descip = $row['short_description'];
	$room_code = $row['room_code'];
		$discount = $row['discount_available'];
	$roommp = $row['room_price'];
	$room_descip = substr($row['short_description'],0,35).'...';
	$extraoffer = $row['extra_offer'];
	if($discount != 0){
	 $newprice = ($row['room_price'] - $discount/100 * $row['room_price']);
}

	echo "
<div class='my_rooms' style='cursor:pointer;float:left;margin-left:5%;margin-top:5%;'>
	<div value='".$jsondecoded_img[0]."' style='transition:background 3s ease-in-out;height:300px;width:300px;'>
	<input type='hidden' value=".$room_code."></div>
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

	echo "<script>


$('.some_glances').find('.room_containers').find('.my_rooms').find('div').each(function(){
	var roomdir = $(this).attr('value')
$(this).css('background','url('+roomdir+')');
$(this).css('background-size','300px 300px')
	})



</script>";
}

	 ?>

</div>
</div>




</div>

</div></center><br><br>
<div class="reserve_cont" style="
background:rgba(0, 0, 0, 0.5);
    background: url('https://colorlib.com/preview/theme/sogo/images/hero_4.jpg');
    height: 300px;
    margin-bottom:1%;
    background-position: right -100px;
    background-attachment: fixed;
    position: relative;
    top: 10%;

">
<h3 style="
    text-align: left;
    margin-left: 20%;
    position: relative;
    top: 55%;
    color: #fff;
    font-family: Playfair Display, times, serif;
    font-size: 40px;
">Best Place To Stay , Reserve Us Now !</h3>
<center><button class='reserve_button btn btn-warning' style='font-size:20px;color:#fff;font-weight: 900'>Reserve us</button></center>
</div><br><br>
<div class="reservation modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Reservation Form of Moontower Inn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<label for='fname'>Reserver's First Name</label><br>
<input type="text" class="form-control" id="fname">
<label for='lname'>Reserver's Last Name</label><br>
<input type="text" class="form-control" id="lname">
<label for='rage'>Reserver's Age</label><br>
<input type="text" class="form-control" id="rage">
<label for='nadult'>Numbers of Adults</label><br>
<select id="nadult" class="form-control">
	<?php
for ($i=0; $i <7 ; $i++) { 
	echo "<option>".$i."</option>";
	# code...
}

	 ?>
	 <option>6+</option>
</select >
<label for='nchilds'>Numbers of Childrens</label><br>
<select id="nchilds" class="form-control">
	<?php
for ($i=0; $i <7 ; $i++) { 
	echo "<option>".$i."</option>";
	# code...
}

	 ?>
	 <option>6+</option>
</select>
<label for='cno'>Reserver's Contact Number</label><br>
<input type="number"  class="form-control" id="cno">
<label for="rphoto">Please submit your Passport Size Photo</label><br>
<label for="rphoto" style="cursor: pointer;"><img src="https://png.pngtree.com/svg/20170809/jen_camera_add_740680.png" height="100px"></label><br><br>
<input type="file" class="form-control" style="display: none;" id="rphoto">
 <label for="nrooms">Numbers of Rooms You Prefer</label>
 <select id="nrooms" class="form-control">
	<?php
for ($i=0; $i <7 ; $i++) { 
	echo "<option>".$i."</option>";
	# code...
}

	 ?>
	 <option>6+</option>

</select>



 <small id="emailHelp" class="form-text text-muted">
 We'll never share your private informations with anyone else.
 Important Note: So Please , Do not Remove your cookies<br> Or else even if we will have your bookings  you can't have your booking features - Thank You Moon Tower Inn Team</small>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="book_room btn btn-primary">Book My Room
<input type="hidden" class="room_code" value="direct">
        </button>
      </div>
      	<div class="response" style="
    background: black;
    width: 100%;
     height: 100%;
    margin-top: 20px;
    font-family: Raleway;
    font-weight: 800;
    color: lime;
    text-align: center;
    padding-top: 20px;
    display: none;
"></div>
    </div>
  </div>
</div>



<?php include 'footer.php';?>
		<script>
var fd = new FormData;
var rfiles = 0;		
var codes_direct = "Random";


$('.reservation').find('.modal-footer').find('.book_room').click(function(){
	var invalid  = 0;

	$(this).parent().parent().find('input,select:not("#cno")').each(function(){
		if($.trim($(this).val()).length == 0){
			$(this).css('border','1.5px solid red');
			invalid++;
		}else{
			$(this).css('border','0px');
		}

	})
	if(rfiles == 0){
		invalid++;
		$(this).parent().parent().find('label').find('img').css('border','1px solid red')
		$(this).parent().parent().find('label').find('img').css('border-radius','50%')
	}else{
		$(this).parent().parent().find('label').find('img').css('border','1.5 px solid #eee')
	}

	if($('.reservation').find('#cno').val().length != 10){
	invalid++;
}else{
		$(this).css('border','1.5 px solid black');
}

if(invalid == 0){

var fname = $('.reservation').find('.modal-body').find('#fname').val();
var lname = $('.reservation').find('.modal-body').find('#lname').val();
var age = $('.reservation').find('.modal-body').find('#rage').val();
var adult = $('.reservation').find('.modal-body').find('#nadult').val();
var child = $('.reservation').find('.modal-body').find('#nchilds').val();
var resrvercno = $('.reservation').find('.modal-body').find('#cno').val();
var total_room = $('.reservation').find('.modal-body').find('#nrooms').val();
fd.append('fname',fname);
fd.append('lname',lname);
fd.append('age',age);
fd.append('adult',adult);
fd.append('child',child);
fd.append('resrvercno',resrvercno);
fd.append('rooms',total_room);
fd.append('file',rfiles);
fd.append('room_code',codes_direct);
fd.append('user_booking','200')
		$.ajax({
  url : 'user_ajaxs/room_ajax.php',
  data:fd,
  processData: false,
  contentType: false,
  type: 'POST',
  success: function(data){
  	console.log(data)
 $('.reservation').find('.response').html(data)
 $('.reservation').find('.response').css('display','block')
 setTimeout(function(){
 	 $('.reservation').find('.response').html('')
 $('.reservation').find('.response').css('display','none')
 },2000)
  }
})

}




})


function readURL(input) {
        var reader = new FileReader();

        reader.readAsDataURL(input.files[0]);

                reader.onload = function (e) {	
                	console.log($('.modal-body').find('label').find('img'))
                	$('.modal-body').find('label').find('img').attr('src',e.target.result);
                	rfiles = input.files[0];
               

                }
            }

$('.reservation').find('input[type="file"]').on('change',function(){
	readURL(this)
})
$('.book_room_highlightroom').click(function(){
	var room_code = $(this).find('input[type="hidden"]').val()
		codes_direct = room_code;
	$('.reservation').find('.modal-footer').find('.book_room').find('input').val(room_code);
})

$('.my_rooms>div').click(function(){
	var room_code = $(this).parent().find('input[type="hidden"]').val();
	codes_direct = room_code;
	$('.reservation').find('.modal-footer').find('.book_room').find('input').val(room_code);
})
$('.reserve_button,.my_rooms>div,.book_room_highlightroom').click(function(){
$('.reservation').modal('show')

})


			$(function () {
  $('[data-toggle="tooltip"]').tooltip('show')
})

setTimeout(function(){
 $('[data-toggle="tooltip"]').tooltip('hide')	
},5000)
$('.view_more').click(function(){
var modal = $(this).attr('value');
$(this).parent().parent().parent().parent().find('.modal').modal('show')
})
			$('.card').click(function(){

			
	
	$(this).toggleClass('flipped');
				
				
		




			})
			setInterval(function(){

					if($('.avaibility_check').offset().top <= $('nav').offset().top+$('.avaibility_check').height()){

						$('.avaibility_check').css('opacity','1');
						$('nav').css('background','#fff');
						$('nav > ul > li> a').css('color','#000');
					}else{
$('.avaibility_check').css('opacity','1');
$('nav').css('background','');
$('nav > ul > li> a').css('color','#fff');
					}

					if($('.caption_1').offset().top <= $('nav').offset().top){
						$('.caption_1').css('opacity','0');

					}else{
$('.caption_1').css('opacity','1');
					}


			},100)


			$(document).on('scroll',function(){
				var top = $('div,p,img').offset().top;

		$('.best_peice_container').animate({opacity:'1'},1500)
		})


			$('.chck_aval-btn').click(function(){
				var invalid = 0;
				$(this).parent().find('input,select').each(function(){
					if($('select').val()+$('select').val() == 0 || $.trim($(this).val()).length == 0 ){
						$(this).css('border','1.5px solid red');
						invalid++;
					}else{
						$(this).css('border','');
					}
				})

				if(invalid == 0){

$.post("user_ajaxs/room_ajax.php",{
	check_in:$('#check_in').val(),
	check_out : $('#check_out').val(),
	total_people : ($('#adults_count').val() + $('#childs_count').val()),
	check_avaibility : "200"

},function(data){

var regex =  new RegExp('Your Room is Available');
if(regex.test(data)){
var newdata = data.split('<>');
$('.response').css('display','block')
$('.response').html(newdata[1])

var  datessplit = newdata[0].split('}')
$.post("user_ajaxs/room_ajax.php",{
	getrooms : "200",
	user_chin : $('#check_in').val(),
	user_chout : $('#check_out').val(),
	roomchin : datessplit[0],
	roomchout :  datessplit[1]

},function(data){
$('.some_glances').find('.room_containers').html(data)
setTimeout(function(){
$('html,body').animate({scrollTop:$('.room_containers').offset().top},1500)
},2000)

})

//MAKE A FUNCTION FOR SCROLLING DOWN TO RECOMMENDED ROOMS


}else{
	$('.response').css('display','block')

	$('.response').html(data)
}

})
				}
			})
		</script>
	</div>
</div>


</body>
</html>


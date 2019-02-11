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
    height: 30px;
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
<div class='best_peice_container' style='opacity:0' >
<h2>The  , Rooms designed for you at its most <br>Welcomes You <span style='color:red;'>&hearts;</span></h2>
<div class='images_videos' style="position: relative;top:10px;">
<?php
while($row = mysqli_fetch_assoc($result)){
	$jsondecoded_img = json_decode($row['room_images']);
	$room_cat = $row['room_cat'];
	$room_cap = $row['room_capacity'];

		$extractext = explode('.',$jsondecoded_img[0]);

			echo "<div class='card'>
			
			<div class='images-flipped' style='height:200px;width:200px;background:#eee;'><p> ".$room_cat."<br><br>Capacity for:".$room_cap." </p></div>
			<div class='images' style='height:200px;width:200px;' height='200px'></div>
			</div>";
echo "<script>
$('.images').css('background','url(".$jsondecoded_img[0].")');
</script>";
}
echo "</div>";


 } ?>
	</div>
		<script>


			$('.card').click(function(){
			
	
	$('.card').toggleClass('flipped');
				
				
			
			})
			setInterval(function(){

					if($('.avaibility_check').offset().top <= $('nav').offset().top+$('.avaibility_check').height()){
					
						$('.avaibility_check').css('opacity','0');
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
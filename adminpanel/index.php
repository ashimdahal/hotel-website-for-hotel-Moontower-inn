
<!DOCTYPE html>
<html>
<head>
	<title>Moon Tower Inn Admin Panel</title>
</head>
<link rel="stylesheet" type="text/css" href="../bootstrap/admin_log.css">
<link href="https://fonts.googleapis.com/css?family=Abel|Raleway|Staatliches" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- JQUERY-->
	  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<body>
<div class='login_feild'>
	<h4 class=''>Login With Your Moon Tower Inn Admin Account</h4>
	<span></span>
		<label for='uname'>Your Username </label><br>
	<input type='username' class='form-input' id='uname'>
			<br><label for='pwd'>Your Password</label><br>
	<input type='password' class='form-input' id='pwd'>
	<br>

	<label class='rem_leb' for='rem_me'>Remember me</label>

	<input type='radio' class='rem-input' id='rem_me'>
		<label class='rem_leb2' for='rem_me'></label>
<br><br><br>
<button class='submit_btn'>Login</button>

<script>
	$('.submit_btn').click(function(){
		var invalid = 0;
		var pass = $('input[type="password"]').val();
		var user = $('input[type="username"]').val();
		var rem_me = "No";
		if($('input[type="radio"]').is(':checked')){
         rem_me = "Yes";
		}  
		
	if($.trim(pass).length == 0){
		$('input[type="password"]').css('border','1px solid red')
		invalid++;
	}else{
		$('input[type="password"]').css('border','')
	}
	if($.trim(user).length == 0){
		$('input[type="username"]').css('border','1px solid red')
		invalid++;
	}else{
		$('input[type="username"]').css('border','')
	}

if(invalid == 0){
	$.post('admin_ajaxs/loginajx.php',{
    login :"200",
	uname :user,
	pwd : pass,
	rem:rem_me

	},function(data){
$('span').html(data);
var r_ok = "<p class='response' style='color:red;font-family:monospace;'>You are Siggned In</p>";
setTimeout(function(){
if(data == r_ok){

window.location.href = 'admin_dashboard.php';
}
},2000)

	})
	
}


})


</script>




</div>
</body>
</html>
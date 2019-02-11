<?php include 'page_secure.php';
$conn = mysqli_connect('localhost','root','','moontower_admins');
$sql = "SELECT * FROM admins_users WHERE uname='$savedsession'";
$result =  mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
	 $post = $row['company_post'];
	 $name = $row['uname'];
}

#Verify This Once More Recommended!!
if(!$post == 'Owner' || $post == 'Manager'){
	header('Location:admin_dashboard.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Managment</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/emoloyee_manage.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Raleway|Staatliches" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>
<body>
<header><br><h2>Add,Remove Or Upgrade Your Employees</h2></header>
<div class='Employees_stat'>
	<h4>Current Employees Status</h4>
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Company Post</th>
      <th scope="col">Last Login</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	$conn = mysqli_connect('localhost','root','','moontower_admins');
  	$sql2 = "SELECT * FROM admins_users WHERE company_post <> 'Owner' and company_post<>'Manager'";
    $result2 =  mysqli_query($conn,$sql2);
    $key = 1;
    while($row2 = mysqli_fetch_assoc($result2)){
      $user = $row2['uname'];
      $c_post = $row2['company_post'];
      $last_login = $row2['last_login'];
echo "  <tr>
      <th scope='row'>".$key++."</th>
      <td class='uname'>".$user."</td>
      <td>".$c_post."</td>
      <td>".$last_login."</td>
      <td><button type='button'  class='delete btn btn-danger'>Delete</button>
";
echo '<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Are You Sure To Delete '.$user.' ??</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       It will Delete '.$user.' From Admin Acess . 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="yes_delete btn btn-primary">Yes<input type="hidden" class="hidden_user" value='.$user.'></button>
      </div>
      <div class="d_response" style="
    text-align: center;
    background: black;
    color: yellow;
    font-family: monospace;
    font-weight: 800;
    font-size:15px;
    display:none;
">Admin Deleted</div>
    </div>
  </div>
</div>';
echo"
      </td>
    </tr>";

    }

  
    ?>
  </tbody>
</table>

</div>

<br><br>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Add Admins</h5>
      <p class="card-text">
      	<label for="uname">Use Admin's Name For Username</label>
      	<input type="username" id="uname" placeholder="Username of Admin" class='form-control'><br>
      	<label for="uname">Admin's Password Here</label>
      	<input type="password" id="pwd" placeholder="Password of Admin" class='form-control'><br>
      	<label for="uname">Post in Company</label>
      	<input type="text" id="post" placeholder="Designation" class='form-control'><br>
      	<button id="add_admin" class='btn btn-primary'>Add New Admin</button><br>
      	<span class='response' style='color:green;font-family: Raleway;'></span>

      </p>
      <p class="card-text"><small class="text-muted">Fill Every Details Carefully</small></p>
    </div>
  </div>
</div>


<script>
	$(".delete").click(function(){
	

  $(this).parent().find('.modal').modal('show')


	})
  $('.yes_delete').click(function(){
    var user = $(this).find('input').val()
 $.post("admin_ajaxs/employee_ajax.php",{
  delete_user:"200",
  uname : user
 },function(data){
$('.d_response').css('display','block')
setTimeout(function(){
  $('.d_response').css('display','none');
  $('modal').modal('hide');
  location.reload()
},3000)
 })
})
	

	$('#add_admin').click(function(){

		var invalid = 0;
		$('input').each(function(){
			if($.trim($(this).val()).length==0){
				$(this).css('border','1px solid red');
				invalid++;
			}else{
				$(this).css('border','');
				
			}
		})
	if(invalid == 0){
		$.post('admin_ajaxs/employee_ajax.php',{
			uname : $('#uname').val(),
			pwd : $('#pwd').val(),
			post : $('#post').val(),
			add_admin : "200"

		},function(data){
$('.response').html(data)
setTimeout(function(){
 $('.response').html('') 
location.reload()
},3000)
		})
	}


	})
</script>

</body>
</html>
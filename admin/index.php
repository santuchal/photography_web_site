<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Ravi Shanker Tulsan</title>
    <script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
    
  <link rel="stylesheet" href="css/login/reset.css">

    <link rel='stylesheet prefetch' href='css/login/font.css'>
<link rel='stylesheet prefetch' href='css/login/font-awesome.min.css'>

        <link rel="stylesheet" href="css/login/style.css">

    
    <script type="text/javascript" language="javascript">
	$(function() {
	$('#login_Submit').click(function() {
	
	var w=$("#unm").val();
	var w1=$("#pwd").val();
	if(w=='')
	{
		alert('plz give the username')
	}
	else if(w1==''){
		alert('plz give the password')
	}
	else{
	//alert(w);
	$.ajax({
	type:"POST",
	url:"ajax_login.php",
	data:{ss:w,ss1:w1},	
	success:function(res)
	{
	//alert(res);
	//$('#country').html(res);
	var a=res;
	if(a==0)
	{
	alert("USERNAME OR PASSWORD IS INCORRECT");
	
	$('#pwd').val("");
	}
	if(a==1)
	{
	   //alert("aryo");
		window.location="admin.php";
	}
	}
	
	});
	
	}
	
	})
	$('#r1').click(function() {
		
	 //document.getElementById('l1').style.display="none";
	})
	
	});
	</script>
    
    <script type="text/javascript" language="javascript">
	$(function() {
	$('#for_Submit').click(function() {
	
	var w=$("#u1").val();
	var w1=$("#p1").val();
	if(w=='')
	{
		alert('plz give the username')
	}
	else if(w1==''){
		alert('plz give the password')
	}
	else{
	//alert(w);
	$.ajax({
	type:"POST",
	url:"ajax_for.php",
	data:{ss:w,ss1:w1},	
	success:function(res)
	{
	//alert(res);
	//$('#country').html(res);
	var a=res;
	if(a==0)
	{
	alert("USERNAME IS INCORRECT");
	
	$('#p1').val("");
	}
	if(a==1)
	{
	   alert("Password changed successfully");
		//window.location="admin.php";
		$('#p1').val("");
		$('#u1').val("");
	}
	}
	
	});
	
	}
	
	})
	$('#r1').click(function() {
		
	 //document.getElementById('l1').style.display="none";
	})
	
	});
	</script>



<script>
$(document).ready(function(e) {
    
    $('#pwd').keydown(function(e){
		if(e.keyCode==13 )
		{
		var w=$("#unm").val();
	var w1=$("#pwd").val();
	if(w=='')
	{
		alert('Please Enter Username!')
	}
	else if(w1==''){
		alert('Please Enter Password!')
	}
	else{
	//alert(w);
	$.ajax({
	type:"POST",
	url:"ajax_login.php",
	data:{ss:w,ss1:w1},	
	success:function(res)
	{
	//alert(res);
	//$('#country').html(res);
	var a=res;
	if(a==0)
	{
	alert("USERNAME OR PASSWORD IS INCORRECT");
	
	$('#pwd').val("");
	}
	if(a==1)
	{
	   //alert("aryo");
		window.location="admin.php";
	}
	}
	
	});
	
	}
		}
		});
		
		$('#unm').keydown(function(e){
		if(e.keyCode==13 )
		{
		var w=$("#unm").val();
	var w1=$("#pwd").val();
	if(w=='')
	{
		alert('Please Enter Username!')
	}
	else if(w1==''){
		alert('Please Enter Password!')
	}
	else{
	//alert(w);
	$.ajax({
	type:"POST",
	url:"ajax_login.php",
	data:{ss:w,ss1:w1},	
	success:function(res)
	{
	//alert(res);
	//$('#country').html(res);
	var a=res;
	if(a==0)
	{
	alert("USERNAME OR PASSWORD IS INCORRECT");
	
	$('#pwd').val("");
	}
	if(a==1)
	{
	   //alert("aryo");
		window.location="admin.php";
	}
	}
	
	});
	
	}
		}
		});
});

</script>
<script>
function forget_pass()
{
	document.getElementById('login_div').style.display="none";
	document.getElementById('forget_div').style.display="block";
	document.getElementById('new_pass_div').style.display="block";
}

function back_login()
{
	document.getElementById('login_div').style.display="block";
	document.getElementById('forget_div').style.display="none";
	document.getElementById('new_pass_div').style.display="none";
}
function next_div()
{
	document.getElementById('login_div').style.display="none";
	document.getElementById('forget_div').style.display="none";
	document.getElementById('new_pass_div').style.display="block";
}
</script>    
</head>

  <body>

    
<!-- Form Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Please Login Here</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle1"><!--<i class="fa fa-times fa-pencil"></i>-->
<!--    <div class="tooltip">Register</div>
-->  </div>
  <div class="form">
  <div id="login_div" style="display:block;">
    <h2>Login to your account</h2>
    <form action="" method="post">
      <input type="text" name="id" id="unm" placeholder="Username"/>
      <input type="password" name="working" id="pwd" placeholder="Password"/>
     <input type="button" class="btn" value="Login" name="login_Submit" id="login_Submit" >
    </form>
    <div class="cta"><a onClick="forget_pass()" href="javascript:void(0);">Forgot your password?</a></div>
    </div>
    
     <div id="forget_div" style="display:none;">
    <h2>Change Password</h2>
    <form action="" method="post">
      <input type="text" name="id" id="u1" placeholder="USER NAME"/>
    
     
      <input type="password" name="working" id="p1" placeholder="PASSWORD"/>
     <input type="button" class="btn" value="Change Password" name="" id="current_pass" onClick="next_div();">
    </form>
    <div class="cta"><a onClick="back_login()" href="javascript:void(0);">Login</a></div>
    </div>
    
    <div id="new_pass_div" style="display:none;">
    <h2>Change Password</h2>
    <form action="" method="post">
      <input type="text" name="id" id="u1" placeholder="USER NAME"/>
    
     
      <input type="password" name="working" id="p1" placeholder="PASSWORD"/>
     <input type="button" class="btn" value="Change Password" name="for_submit" id="for_Submit" >
    </form>
    <div class="cta"><a onClick="back_login()" href="javascript:void(0);">Login</a></div>
    </div>
    
  </div>
 <!-- <div class="form">
    <h2>Create an account</h2>
    <form>
      <input type="text" placeholder="Username"/>
      <input type="password" placeholder="Password"/>
      <input type="email" placeholder="Email Address"/>
      <input type="tel" placeholder="Phone Number"/>
      <button>Register</button>
    </form>
  </div>
  <div class="cta"><a href="javascript:void(0);">Forgot your password?</a></div>-->
</div>


    <script src='js/jquery.min.js'></script>

        <script src="js/login/index.js"></script>

   
    
    
  </body>
</html>


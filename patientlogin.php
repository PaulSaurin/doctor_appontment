<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<script type="text/javascript">
	function fun(){
		var x=document.getElementById("myinput");
		var y=document.getElementById("hide1");
		var z=document.getElementById("hide2");

		if (x.type=='password') {
			x.type="text";
			y.style.display="block";
			z.style.display="none";
		}
		else{
			x.type="password";
			y.style.display="none";
			z.style.display="block";
		}
	}
	function fun1(){
		var x=document.getElementById("myinput");
		

		if (x.type=='password') {
			x.type="text";
		}
		else{
			x.type="password";
		}
	}
</script>

</head>
<body>
<div class="form-box">
	<h1>Login Here</h1>
	<div class="input-box">
	<i class="fa-solid fa-envelope"></i>
	<input type="email" name="" placeholder="Email Id">
	</div>
	<div class="input-box">
	<i class="fa-solid fa-key"></i>
	<input type="password" name="" placeholder="Password" id="myinput">
	<span class="eye" onclick="fun()">
	<i id="hide1" class="fa fa-eye"></i>
	<i id="hide2" class="fa fa-eye-slash"></i>
	</span>
	</div>
	<button type="button" class="login-btn">LOGIN</button>

	<div>
	<input type="checkbox" onclick="fun1()">Show Password
	</div>
</div>


</body>
</html>
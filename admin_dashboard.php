<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN DASHBOARD</title>

<!-- CDN for Bootstrap starts here -->

		<!-- CSS CDN -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- JS CDN -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- CDN for Bootstrap ends here -->

	<!-- css file for footer -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/mystyle.css">
	<!-- css file for footer ends here -->

	<!-- javascript file -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>javascript/doc_script.js">
	<!-- javascript file ends here -->


	<!-- <style type="text/css">
		
			body {

				/*image/doc_back.jpg*/
    			background: url(.../assets/image/doc_back.jpg) repeat;
			}

	</style> -->



<script type="text/javascript">
		function openpart(portion){
			var i;
			var x=document.getElementsByClassName("portion");
			for(i=0; i<x.length; i++){
				x[i].style.display="none";
			}
		document.getElementById(portion).style.display="block";
		}
</script>



</head>
<body>


	<div class="container">
		<div class="innerdiv">
		<div class="row">
		</div>
		<div class="leftinnerdiv">

		<button class="btn btn-lg btn-danger" onclick="openpart('viewprofile')">VIEW PROFILE</button>
		<button class="btn btn-lg btn-danger" onclick="openpart('editprofile')">EDIT PROFILE</button>
		<button class="btn btn-lg btn-danger" onclick="openpart('viewapp')">VIEW APPOINTMENT</button>
		<button class="btn btn-lg btn-danger" onclick="openpart('p_history')">PATIENT HISTORY</button>
		<a href="<?php echo base_url();?>Doc_cont/doctor_logout"><button class="btn btn-lg btn-danger" >LOGOUT</button></a>
		</div>


			<div class="rightinnerdiv">
			<div id="viewprofile" class="innerright portion" style="display: none;">
				<button class="btn btn-lg btn-danger">VIEW PROFILE</button>
			

			



			
			</div>
			</div>
		</div>
	</div>







</body>
</html>
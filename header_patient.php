<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

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


	<!-- <style type="text/css">
		
			body {
				/* website background */
    			background: url("https://img.freepik.com/premium-photo/healthcare-medicine-covid19-doctor-touch-diagnose-virus-human-lungs-with-coronavirus_34200-499.jpg?w=2000");

    			background-repeat: no-repeat;
    			background-size: cover;
    			background-attachment: fixed;
			}			

	</style> -->

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  		<a class="navbar-brand" href="#">Doc_Web</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>

  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
    	  <li class="nav-item active">
    	    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    	  </li>
    	  <li class="nav-item">
    	    <a class="nav-link" href="#">Link</a>
    	  </li>
    	  <li class="nav-item dropdown">
    	    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portals</a>
    	    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    	      <a class="dropdown-item" href="#">Patient Portal</a>
    	      <a class="dropdown-item" href="#">Doctor Portal</a>
    	      <div class="dropdown-divider"></div>
    	      <a class="dropdown-item" href="#">Something else here</a>
    	    </div>
    	  </li>
    	  <li class="nav-item">
    	    <a class="nav-link" href="">Admin Login</a>
    	  </li>
    	</ul>
    	<form class="form-inline my-2 my-lg-0">
      		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    	</form>
  	</div>
	</nav>
</body>
</html>
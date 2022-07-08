<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor Sign Up</title>

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

</head>

<body>

	<div class="container-fluid">
		
		<!-- Nav bar starts here -->

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

	<!-- Nav bar ends here -->

	<!-- main body content starts here -->
	<div>

		<div class="jumbotron" align="center">
			<header><h1>Welcome to <code>Doc_Web</code> Portal</h1></header>
		</div>

		<main class="container-fluid">
		
		<div>
			<header class="jumbotron"><h1 align="center">Resgister as a patient</h1></header>
		</div>

		<div>
			
			<div class="row">
				
				<div class="col-lg-6 border-right">

					<form method="post" action="insertAction.php" enctype="multipart/form-data" autocomplete="off">
						<header><h2>SignUP</h2></header>
						
						<div class="form-group">
							
							<label>Name : </label>
							<input type="text" name="name" value="" placeholder="Enter your name." class="form-control" required>

						</div>
						<div class="form-group">
							
							<label>Email : </label>
							<input type="text" name="email" value="" placeholder="Enter your email-id." class="form-control" required>

						</div>
						<div class="form-group">
							
							<label>Password : </label>
							<input type="text" name="password" value="" placeholder="Create new password." class="form-control" required>

						</div>
						<div class="form-group">
							
							<label>Confirm-Password : </label>
							<input type="text" name="confirm-password" placeholder="Confirm password." class="form-control" required>
						</div>
						<div class="form-group">
							
							<label>Mobile no. : </label>
							<input type="text" name="mobile" value="" placeholder="Enter your Mobile no." class="form-control" required>
						</div>
						<div class="form-group">
							<label>Problem : </label>
							<textarea name="problem" value="" id="address" class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Address : </label>
							<textarea name="address" value="" id="address" class="form-control" required></textarea>
						</div>
						
						<div class="form-group">
							
							<label>Specialization : </label>
							<select name="specialization" class="form-control">
								<option>Select</option>
								<option>Specialization 1</option>
								<option>Specialization 2</option>
								<option>Specialization 3</option>
								<option>Specialization 4</option>
								<option>Specialization 5</option>
							</select>
						</div>

						<div class="form-group">

							<label>Sex : </label><br>

							<div class="form-check form-check-inline">

							 	<input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="M" required>
							 	<label class="form-check-label" for="inlineRadio1">Male</label>
							</div>
							<div class="form-check form-check-inline">
							 	<input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="F" required>
							 	<label class="form-check-label" for="inlineRadio2">Female</label>
							</div>
							<div class="form-check form-check-inline">
							 	<input class="form-check-input" type="radio" name="sex" id="inlineRadio3" value="Other" required>
							 	<label class="form-check-label" for="inlineRadio3">Other</label>
							</div>
							<div class="form-check form-check-inline">
							 	<input class="form-check-input" type="radio" name="sex" id="inlineRadio4" value="NA" required disabled>
							 	<label class="form-check-label" for="inlineRadio4">Prefer not to disclose</label>
							</div>

						</div>
						<div class="form-group">
							<label>Age : </label>
							<input type="number" name="age" value="" placeholder="Enter your age" class="form-control">
						</div>					
						<div>
							<input type="submit" name="submit" value="SUBMIT">
							<input type="reset" value="Reset">
						</div>
						<br><br>

					</form>
					
				</div>

				<div class="col-lg-6">
					
					<header><h2 style="color: tomato;">Instructions for signing-up : </h2></header>

					<section style="color: black;">
						<article>
							<em>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</em>
						</article><hr color="#ccc">
					</section>
					<section style="color: black;">
						<article>
							<em>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</em>
						</article><hr color="#ccc">
					</section>
					<section style="color: black;">
						<article>
							<em>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</em>
						</article><hr color="#ccc">
					</section>

				</div>

			</div>

		</div>



	</main>
	</div>

	</div>

	<!-- Footer starts Here  -->
		<footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">Doc_Web</h5>
                    <p class="small text-muted">Created by : Arnab Ghosh, Saurin Paul, Kaustav Chakraborty</p>
                    <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. 
                    	<a class="text-primary" href="#">Arnab || Saurin || Kaustav</a>
                    </p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="">Get started</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Get started</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane">Subscribe</i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    	</footer>

    <!-- Footer ends Here  -->
</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">BOOK MY DOC</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="home.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<div class="dropdown">
							<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
							Services
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="home.php#services">Book Appointment</a>
								<a class="dropdown-item" href="home.php#services">Online Payment</a>
								<a class="dropdown-item" href="home.php#services">Self Check-Up</a>
							</div>
						</div>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="feedback.php">Feedback</a>
						</li>
						<div class="dropdown">
							<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
							Login
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="doctor_login.php">Doctor</a>
								<a class="dropdown-item" href="patient_login.php">Patient</a>
								<a class="dropdown-item" href="admin_login.php">Admin</a>
							</div>
						</div>
					</ul>
				</div>
			</div>
		</nav>
		<div class="jumbotron">
			<h2>Doctor</h2> 
            <p>Welcome Back Log into your Account!</p>
		</div>
		<section class="my-5">
			<div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
					<form role="form" method="post" id="reused_form">
		                <div class="row">
		                    <div class="col-sm-12 form-group">
		                        <label for="name"> Username:</label>
		                        <input type="text" class="form-control" id="fullname" name="fullname" maxlength="50">
		                    </div>
		          
		                </div>
		                
		                 <div class="row">
		                    <div class="col-sm-12 form-group">
		                        <label for="name"> Password:</label>
		                        <input type="text" class="form-control" id="fullname" name="fullname" maxlength="50">
		                    </div>
		                    
		                </div>
		                
		                 <div class="row">
		                    <div class="col-sm-12 form-group">
		                        <label for="name"> Confirm Password:</label>
		                        <input type="text" class="form-control" id="consultedfor" name="consultedfor" maxlength="50">
		                    </div>	
		                    
		                </div>
		                <div class="row">
		                    <div class="col-sm-12 form-group">
		                       <a href="profile.php" type="submit" class="btn btn-lg btn-success btn-block" id="btnFeedback">Login</a>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-sm-12 form-group">
		                        <a href="doctor_register.php" type="submit" class="btn btn-lg btn-success btn-block"  id="btnFeedback">Register</a>
		                    </div>
		                </div>			               
		            </form>
		            <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Successfully created user!</h3> </div>
		            <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error submitting your details. </div>
		        </div>
		        <div class="col-lg-6 col-md-6 col-12">
		        	<img src="images/doctor_login.jpg" class="img-fluid aboutimg">
		        </div>
		    </div>
			</div>
		</section>
	</body>
</html>
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
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		
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
							<a class="nav-link" href="#">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="feedback.php">Feedback</a>
						</li>
						<div class="dropdown">
							<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
							Login
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="http://localhost/BookMyDoc/doctor-appointment-management-system/admin/index.php">Doctor</a>
								<a class="dropdown-item" href="http://localhost/BookMyDoc/doctor-appointment-management-system/login.php">Patient</a>
								<a class="dropdown-item" href="http://localhost/BookMyDoc/doctor-appointment-management-system/admin/index.php">Admin</a>
							</div>
						</div>
					</ul>
				</div>
			</div>
		</nav>
		<div class="jumbotron">
			<h2>Contact Us</h2>
			<p> Send us your message and we will get back to you as soon as possible </p>
			<p> Mobile no : 1234567890 </p>
			<p> Email  : bookmydocofficial23@gmail.com </p>
		</div>
		<section class="my-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<form role="form" method="post" id="reused_form">
							<div class="row">
								<div class="col-sm-6 form-group">
									<label for="name"> First Name:</label>
									<input type="text" class="form-control" id="firstname" name="firstname" maxlength="50">
								</div>
								<div class="col-sm-6 form-group">
									<label for="name"> Last Name:</label>
									<input type="text" class="form-control" id="lastname" name="lastname" maxlength="50">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 form-group">
									<label for="email"> Email:</label>
									<input type="text" class="form-control" id="email" name="email" maxlength="50">
								</div>
								<div class="col-sm-6 form-group">
									<label for="email"> Phone:</label>
									<input type="tel" class="form-control" id="phone" name="phone" required maxlength="50">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 form-group">
									<label for="name"> Message:</label>
									<textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 form-group">
									<input value="Post" type="button" class="btn btn-primary btn-lg  btn-block form-control" style="font-size: 20px;"
									onclick="ContactMessage()">
									
									
								</div>
							</div>
						</form>
						<div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
						<div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<img src="images/ContactUs2.jpg" class="img-fluid aboutimg">
					</div>
				</div>
			</div>
		</section>
	</body>
	<script type="text/javascript">
		
			
			
			function ContactMessage()
	{
				var firstname = document.getElementById("firstname").value;
					var	lastname = document.getElementById("lastname").value;
					var	email = document.getElementById("email").value;
					var	phone = document.getElementById("phone").value;
					var	message = document.getElementById("message").value;
				
				
			
			if(firstname === '' || lastname === '' || email === '' || phone === '' ||message === ''  ){
						swal({
								text: "Please fill all details correctly !",
								icon: "warning",
								button: "OK",
							});
					}
			else{
						swal({
								title: "---------------BookMyDoc---------------Thanks for Contacting Us ",
								text: "Your message was received. We will get back to you as soon as possible !",
								button: "OK",
							});
							
				}
	}
	</script>
	
	
	</script>
</html>
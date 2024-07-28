<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="css/style_feedback.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="https://getbootstrap.com/docs/5.0/components/modal/"></script>
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
							<a class="nav-link" href="contact.php">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Feedback</a>
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
			<h2>Feeedback</h2>
			<p> Send us feedback about our services so that we can improve in future. </p>
		</div>
		<section class="my-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<form role="form" method="post" id="reused_form">
							<div class="row">
								<div class="col-sm-6 form-group">
									<label for="name"> Name:</label>
									<input type="text" class="form-control" id="fullname" name="fullname" maxlength="50" required="true">
								</div>
								<div class="col-sm-6 form-group">
									<label for="name"> Consulted for:</label>
									<input type="text" class="form-control" id="consultedfor" name="consultedfor" maxlength="50" required="true">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 form-group">
									<label for="name"> Feedback:</label>
									<textarea class="form-control" type="textarea" id="feedback" name="feedback" placeholder="Your Message Here" maxlength="3000" rows="5" required="true"></textarea>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-12 form-group">
									<label for="name"> Give Your Ratings:</label>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 form-group">
									<div class="container">
										<div class="star-widget" align="left">
											<input type="radio" name="rate" id="rate-5">
											<label for="rate-5" class="fas fa-star"></label>
											<input type="radio" name="rate" id="rate-4">
											<label for="rate-4" class="fas fa-star"></label>
											<input type="radio" name="rate" id="rate-3">
											<label for="rate-3" class="fas fa-star"></label>
											<input type="radio" name="rate" id="rate-2">
											<label for="rate-2" class="fas fa-star"></label>
											<input type="radio" name="rate" id="rate-1">
											<label for="rate-1" class="fas fa-star"></label>
										<form action="#"></form>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="row">
							<div class="col-sm-12 form-group">
								<input value="Submit" type="button" class="btn btn-primary btn-lg  btn-block form-control" style="font-size: 20px;"
								onclick="FeedbackMessage()">
								
								
							</div>
						</div>
					</div>
				</form>
				<div class="col-lg-6 col-md-6 col-12">
					<img src="images/feedback.jpg" class="img-fluid aboutimg">
				</div>
			</div>
			
		</div>
	</div>
</section>
</body>
<script type="text/javascript">
		
			
			
			function FeedbackMessage()
	{
				var fullname = document.getElementById("fullname").value;
					var	consultedfor = document.getElementById("consultedfor").value;
					var	feedback = document.getElementById("feedback").value;
				
				
				
			
			if(fullname === '' || consultedfor === '' || feedback === ''   ){
						swal({
								text: "Please fill all details correctly !",
								icon: "warning",
								button: "OK",
							});
					}
			else{
						swal({
								title: "---------------BookMyDoc---------------Thanks for Rating Us !",
								text: "Your feedback was received !",
								button: "OK",
							});
							
				}
	}
</script>
</html>
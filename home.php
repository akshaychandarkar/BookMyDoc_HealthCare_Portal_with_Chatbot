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
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<div class="dropdown">
							<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
							Services
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#services">Book Appointment</a>
								<a class="dropdown-item" href="#services">Online Payment</a>
								<a class="dropdown-item" href="#services">Self Check-Up</a>
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
								<a class="dropdown-item" href="http://localhost/BookMyDoc/doctor-appointment-management-system/admin/index.php">Doctor</a>
								<a class="dropdown-item" href="http://localhost/BookMyDoc/doctor-appointment-management-system/login.php">Patient</a>
								<a class="dropdown-item" href="http://localhost/BookMyDoc/doctor-appointment-management-system/admin/index.php">Admin</a>
							</div>
						</div>
					</ul>
				</div>
			</div>
		</nav>

		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/d4.jpg" alt="Los Angeles" width="1100" height="500">
					<div class="carousel-caption">
						<h1 align="right">Welcome To BookMyDoc</h1>
						<p align="right">We Care For Your Health Every Moment</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/d7.jpg" alt="Chicago" width="1100" height="500">
					<div class="carousel-caption" >
						<h3>WE THE BEST DOCTORS</h3>
						<p>We Are Here For Your Care 24/7.</p>
						<p>Any Help Just Call Us.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/d5.jpg" alt="New York" width="1100" height="500">
					<div class="carousel-caption">
						<h3>Best Treatment Needs Best Service!!</h3>
						<p> We Are BookMyDoc. We Provide Quality Services. </p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>

		<section class="my-5">
			<div class="py-5">
				<h2 class="text-center">About Us</h2>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<img src="images/logo2.png" class="img-fluid aboutimg">
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<h2 class="display-4">We Are BookMyDoc</h2>
						<p class="py-3">BOOK MY DOC website is an online healthcare management service provider with easy to use customizable options. In todays situation of covid , BOOK MY DOC eliminates the distance between doctor and patient while offering ample services in just a few clicks. Our website can help you find your desired doctor while making your search easy and ensuring an instant appointment. It helps you to save time while simplifying life and offering e-consultation. It helps to accelerate your doctor appointment booking into more secure and faster way which protects customer's privacy while offering them innovative solutions.</p>
						<a href="About.php" class="btn btn-primary">Know More</a>
					</div>
				</div>
			</div>
		</section>
		<section class="my-5">
			<a name="services">
				<div class="py-5">
					<h2 class="text-center">Our Services</h2>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card">
								<img class="card-img-top" src="images/appointment.png" alt="Card image">
								<div class="card-body">
									<h4 class="card-title">Book An Appointment</h4>
									<p class="card-text">Doctors Appoinment booking at your finger tips.</p></br>
									<a href="http://localhost/BookMyDoc/doctor-appointment-management-system/index.php" class="btn btn-primary">Book Now</a>
								</div>
							</div>
							
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card">
								<img class="card-img-top" src="images/onlinepayment.png" alt="Card image">
								<div class="card-body">
									<h4 class="card-title">Make Online Payment</h4>
									<p class="card-text">Paying bills at your finger tips.</p></br>
									<a href="Payment.php" class="btn btn-primary">Pay Now</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card">
								<img class="card-img-top" src="images/selfcheckup.png" alt="Card image">
								<div class="card-body">
									<h4 class="card-title">Self Check-Up</h4>
									<p class="card-text">Checking your health at your finger tips.</p></br>
									<a href="http://localhost/BookMyDoc/chatbot%20-%20php%20&%20ajax/bot.php" class="btn btn-primary">Check Now</a>
								</div>
							</div>						
						</div>					
					</div>
				</div>
			</a>
		</section>

		<section class="my-5">
			<a name="services">
				<div class="py-5">
					<h2 class="text-center">Login Profiles</h2>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card">
								<img class="card-img-top" src="images/newdp1.png" alt="Card image">
								<div class="card-body" align="center" >
									
									<a href="http://localhost/BookMyDoc/doctor-appointment-management-system/login.php"  class="btn btn-primary">Patient</a>
								</div>
							</div>	
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card">
								<img class="card-img-top" src="images/newdp2.png" alt="Card image">
								<div class="card-body"align="center" >
									
									<a href="http://localhost/BookMyDoc/doctor-appointment-management-system/admin/index.php"   class="btn btn-primary">Doctor</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card">
								<img class="card-img-top" src="images/newdp3.png" alt="Card image">
								<div class="card-body" align="center">
									
									<a href="http://localhost/BookMyDoc/doctor-appointment-management-system/admin/index.php"  class="btn btn-primary">Admin</a>
								</div>
							</div>						
						</div>					
					</div>
				</div>
			</a>
		</section>


		<section class="my-5">
			<div class="py-5">
				<h2 class="text-center">Our Gallery</h2>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/gallery1.jfif" class="img-fluid galleryimg pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/gallery2.jfif" class="img-fluid galleryimg pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/gallery3.jpg" class="img-fluid galleryimg pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/gallery4.jfif" class="img-fluid galleryimg pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/gallery5.jpg" class="img-fluid galleryimg pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/gallery6.jpg" class="img-fluid galleryimg pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/gallery7.jfif" class="img-fluid galleryimg pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/gallery8.jpg" class="img-fluid galleryimg pb-3">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/gallery9.jfif" class="img-fluid galleryimg pb-3">
					</div>
					
				</div>
			</div>
		</section>
		<section class="my-5">
			<div class="py-5">
				<h2 class="text-center">Contact Us</h2>
				<div class="footer-dark">
					<footer>
						<div class="container">
							<div class="row">
								<div class="col-md-3 item">
									<h3>Services</h3>
									<ul>
										<li><a href="http://localhost/BookMyDoc/doctor-appointment-management-system/index.php">Book Appointment</a></li>
										<li><a href="Payment.php">Online Payment</a></li>
										<li><a href="#">Self Check-Up</a></li>
									</ul>
								</div>
								<div class="col-md-3 item">
									<h3>About</h3>
									<ul>
										<li><a href="about.php">Our Mission</a></li>
										<li><a href="about.php">Our Doctors</a></li>
										<li><a href="about.php">Our team</a></li>
									</ul>
								</div>
								<div class="col-md-3 item">
									<h3>Connect Us</h3>
									<ul>
										<li><a href="#"><i class="fas fa-phone-alt"></i> 022-12345678</a></li>
										<li><a href="#"><i class="far fa-envelope"></i> bookmydoc@doc.com</a></li>
										
									</ul>
								</div>
								<div class="col-md-3 item text">
									<h3>BOOK MY DOC</h3>
									<a href="#"><i class="fas fa-map-marker-alt"></i>  Sri Aurobindo Marg, Ansari Nagar, Ansari Nagar East, New Delhi, Delhi 110029</a>
								</div>
								<div class="col item social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-google-plus-g"></i></a></div>
							</div>
							<p class="copyright">BookMyDoc.com © 2020</p>
						</div>
					</footer>
				</div>
				
				
			</div>
		</section>
	</body>
</html>
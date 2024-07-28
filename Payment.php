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
			<h2 align="center">Make Payment</h2>
			<p align="center">We Provide Secure Payment</p>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>

	<div class="padding">
			<div class="row">
				<div class="container-fluid d-flex justify-content-center">
					<div class="col-sm-8 col-md-6">
						<div class="card" padding-left= 40px;>
							<div class="card-header">
								<div class="row">
									<div class="col-md-6"> <span>CREDIT/DEBIT CARD PAYMENT</span> </div>
									<div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png"> <img src="https://img.icons8.com/color/36/000000/amex.png">
									</div>
								</div>
							</div>
							<div class="card-body" style="height: auto;">
										<div class="form-group"> <label for="numeric" class="control-label">RECIPIENT'S  NAME</label> <input type="text" id="recipientname" class="input-lg form-control">
										</div>
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group"> <label for="numeric" class="control-label">CARD HOLDER NAME</label> <input type="text" id="cardholdername" class="input-lg form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group"> <label for="cc-number" class="control-label">CARD NUMBER</label> <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group"> <label for="cc-exp" class="control-label">CARD EXPIRY</label> <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group"> <label for="cc-cvc" class="control-label">CARD CVC/CVV</label> <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="••••" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group"> <label for="date" class="control-label">DATE</label> <input id="date" type="date" class="input-lg form-control date" autocomplete="date" placeholder="DD/MM/YYYY" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group"> <label for="amount" class="control-label">AMOUNT</label> <input id="amount"  type="number" class="input-lg form-control amount" autocomplete="off" placeholder="••••" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group"> <input value="RESET" type="button" class="btn btn-primary btn-lg  btn-block form-control" style="font-size: 20px;" onclick="ClearInputFields()">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group"> <input value="PAY" type="button" class="btn btn-success btn-lg  btn-block form-control" style="font-size: 20px;" onclick="MakePayment()">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group"> <input value="CANCEL" type="button" class="btn btn-danger btn-lg btn-block form-control" style="font-size: 20px;" onclick="CancelPayment()">
										</div>
									</div>
 								</div>
 								
	


							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	
</body>
<script type="text/javascript">
	function ClearInputFields()
	{
		document.getElementById("recipientname").value = '';
		document.getElementById("cardholdername").value = '';
		document.getElementById("cc-number").value = '';
		document.getElementById("cc-exp").value = '';
		document.getElementById("cc-cvc").value = '';
		document.getElementById("date").value = '';
		document.getElementById("amount").value = '';
	}
	function CancelPayment()
	{
				var recipientname = document.getElementById("recipientname").value;
				var	cardholdername = document.getElementById("cardholdername").value;
				var	cc_number = document.getElementById("cc-number").value;
				var	cc_exp = document.getElementById("cc-exp").value;
				var	cc_cvc = document.getElementById("cc-cvc").value;
				var	date = document.getElementById("date").value;
				var	amount = document.getElementById("amount").value;
			
			if(recipientname === '' || cardholdername === '' || cc_number === '' || cc_exp === '' || cc_cvc === '' || date === '' || amount === '' ){
						swal({
								text: "Please fill all details correctly !",
								icon: "warning",
								button: "OK",
							});
					}
			else{
						swal({
								title: "Are you sure?",
								text: "Once cancelled, your transaction will be terminated !",
								icon: "warning",
								buttons: true,
									dangerMode: true,
							})
							.then((willDelete) =>   {
													if (willDelete) {
																	swal("Your transaction is terminated Successfully !",
																	{
																		icon: "success",
																		}	);
																	}
													else{
															swal("Your transaction process is continued !");
														}
													}
								);
				}
	}
</script>
<script type="text/javascript">
	function MakePayment()
	{
		var recipientname = document.getElementById("recipientname").value;
				var	cardholdername = document.getElementById("cardholdername").value;
				var	cc_number = document.getElementById("cc-number").value;
				var	cc_exp = document.getElementById("cc-exp").value;
				var	cc_cvc = document.getElementById("cc-cvc").value;
				var	date = document.getElementById("date").value;
				var	amount = document.getElementById("amount").value;
			
			if(recipientname === '' || cardholdername === '' || cc_number === '' || cc_exp === '' || cc_cvc === '' || date === '' || amount === '' ){
						swal({
								text: "Please fill all details correctly !",
								icon: "warning",
								button: "OK",
							});
					}
			else{
						swal({
								title: "Transaction in Process",
								buttons:["Cancel", "Proceed"] ,
								dangerMode: true,
							})
							
							.then((willDelete) => {
							if (willDelete)
							{
							swal("Payment Successful!", {
							icon: "success",
							});
							}
							else
							{
							swal("Transaction Failed !");
							}
							});
				}
	}
</script>
</html>
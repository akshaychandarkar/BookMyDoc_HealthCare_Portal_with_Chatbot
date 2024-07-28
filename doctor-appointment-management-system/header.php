<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>BookMyDoc</title>

	    <!-- Custom styles for this page -->
	    <link href="vendor/bootstrap/bootstrap.min.css" rel="stylesheet">

	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	    <link rel="stylesheet" type="text/css" href="vendor/parsley/parsley.css"/>

	    <link rel="stylesheet" type="text/css" href="vendor/datepicker/bootstrap-datepicker.css"/>

	    <!-- Custom styles for this page -->
    	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	    <style>
	    	.border-top { border-top: 1px solid #e5e5e5; }
			.border-bottom { border-bottom: 1px solid #e5e5e5; }

			.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
	    </style>
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
                <a class="nav-link active" aria-current="page" href="http://localhost/BookMyDoc/home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/BookMyDoc/doctor-appointment-management-system/admin/index.php">Doctor</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/BookMyDoc/doctor-appointment-management-system/login.php">Patient</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/BookMyDoc/doctor-appointment-management-system/admin/index.php">Admin</a>
              </li>
              
              
            </ul>
          </div>
        </div>
      </nav>
  </body>
		
		    <?php
		    if(!isset($_SESSION['patient_id']))
		    {
		    ?>
		    
		   	<?php
		   	}
		   	?>
		    
	    </div>

	    <div class="jumbotron">
      <h2 align="center">WELCOME</h2> 
            <p align="center"> We Are BookMyDoc. We Provide Quality Services.</p>
	    </div>
	    <br />
	    <br />
	    <div class="container-fluid">
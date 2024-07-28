<?php
include('../class/Appointment.php');
$object = new Appointment;
if($object->is_login())
{
header("location:".$object->base_url."admin/dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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

    
    <title>BookMyDoc</title>
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="../css/sb-admin-2.min.css" rel="stylesheet">
      
      <link rel="stylesheet" type="text/css" href="../vendor/parsley/parsley.css"/>
      <style>
      html,
      body {
      height: 100%;
      }
      body {
      
      align-items: center;
      padding-top: 0px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
      }
      .form-signin {
      width: 50%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
      }
      
      .form-signin .checkbox {
      font-weight: 400;
      }
      .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
      }
      .form-signin .form-control:focus {
      z-index: 2;
      }
      .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      }
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
    <div class="jumbotron">
      <h2>WELCOME</h2>
      <p> We Are BookMyDoc. We Provide Quality Services.</p>
    </div>
    
    
    <body class="text-center">
      <main class="form-signin">
        <form method="post" id="login_form">
          <h1 class="h3 mb-3 fw-normal"></h1>
          <span id="error"></span>
          <div class="form-group">
            <input type="text" name="admin_email_address" id="admin_email_address" class="form-control" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Enter Email Address..." />
          </div>
          <div class="form-group">
            <input type="password" name="admin_password" id="admin_password" class="form-control" required  data-parsley-trigger="keyup" placeholder="Password" />
          </div>
          <div class="form-group">
            <button type="submit" name="login_button" id="login_button" class="btn btn-primary btn-user btn-block">Login</button>
          </div>
        </form>
      </main>
      <!-- Bootstrap core JavaScript-->
      <script src="../vendor/jquery/jquery.min.js"></script>
      <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="../js/sb-admin-2.min.js"></script>
      <script type="text/javascript" src="../vendor/parsley/dist/parsley.min.js"></script>
    </body>
  </html>
  <script>
  $(document).ready(function(){
  $('#login_form').parsley();
  $('#login_form').on('submit', function(event){
  event.preventDefault();
  if($('#login_form').parsley().isValid())
  {
  $.ajax({
  url:"login_action.php",
  method:"POST",
  data:$(this).serialize(),
  dataType:'json',
  beforeSend:function()
  {
  $('#login_button').attr('disabled', 'disabled');
  $('#login_button').val('wait...');
  },
  success:function(data)
  {
  $('#login_button').attr('disabled', false);
  if(data.error != '')
  {
  $('#error').html(data.error);
  $('#login_button').val('Login');
  }
  else
  {
  window.location.href = data.url;
  }
  }
  })
  }
  });
  });
  </script>
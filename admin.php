<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<!-- Title -->
	<title>Carshare</title>
	<!-- Meta -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<!-- Favicon -->
	<link href="favicon.html" rel="shortcut icon">
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
	<!-- Google Fonts-->
	<link href="http://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="pre_header" class="visible-lg"></div>
	<div id="header" class="container">
		<div class="row">
			<!-- Logo -->
			<div class="logo">
				<a href="index.html" title="">
					<img src="assets/img/logoo.jpg" alt="Logo" />
				</a>
			</div>
			<!-- End Logo -->
			<!-- Top Menu -->
			<div class="col-md-12 margin-top-30">
				<div id="hornav" class="pull-right visible-lg">
								</div>
				</div>
				<div class="clear"></div>
				<!-- End Top Menu -->
			
			</div>
		</div>
		<!-- === END HEADER === -->
		<!-- === BEGIN CONTENT === -->
		
		<div id="content" class="container">
			<div class="container">
				<div class="row margin-vert-30">
					<!-- Login Box -->
					<div class="col-md-6 col-md-offset-3 col-sm-offset-3">
					
						<form method="post">
							<div class="login-header margin-bottom-30">
								<h2>Administrator Login(Only for Authorized Administrators)</h2>
							</div>
							<div class="input-group margin-bottom-20">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input placeholder="Enter your registered email" class="form-control" type="text" name="email">
							</div>
							<div class="input-group margin-bottom-20">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input placeholder="Password" class="form-control" type="password" name="pass">
							</div>
							<div class="row">
								<div class="col-md-6">
									<button class="btn btn-primary pull-right" type="submit" name="submit">Login</button>
								</div>
							</div>
							<hr>
						</form>
						

				
						<?php


include("connection.php");
session_start();
if(isset($_POST["submit"])!="")
{
	
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  
$x=mysql_query("SELECT * FROM admin WHERE email='$email' AND pass='$pass'");
if($rw=mysql_num_rows($x))
  {
  	$_SESSION['email']=$rw;
  	$_SESSION['email']=$email	;
  	
     echo " logged in successfully";
     header("location:adminview.php");


     
   
    
  }
  
  else {
    echo "incorrect email or password";
    } 
  
}
?>

					</div>
					<!-- End Login Box -->
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<!-- === END CONTENT === -->
			<div id="footer">
			<div class="container">
				<div class="row">
					<div id="copyright" class="col-md-4">
						<p>(c) 2016 Carshare Inc.All rights reserved</p>
					</div>
					<div id="footermenu" class="col-md-8">
						<ul class="list-unstyled list-inline pull-right">
							<li>
								<a href="http://www.facebook.com" target="_blank" >Join us on Facebook</a>
							</li>
							<li>
								<a href="http://www.facebook.com" target="_blank" >Join us on Twitter</a>
							</li>
							<li>
								<a href="http://www.facebook.com" target="_blank" >Join us on Instagram</a>
							</li>
							<li>
								<a href="http://www.facebook.com" target="_blank" >Join us on Google+</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Footer Menu -->
</div>
</div>
</body>
</html>
<!-- === END FOOTER === -->
</body>
</html>
<!-- === END FOOTER === -->
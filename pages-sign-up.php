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
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="pages-about-us.html"><span>About Us</span>
							
						</li>
						
						
							
						
						
							<li><a href="pages-sign-up.php">Sign up</a></li>
							
						
						<li><a href="pages-login.php">Login</a></li>
						<li><a href="admin.php">Admin Section</a></li>
					</ul>				</div>
				</div>
				<div class="clear"></div>
				<!-- End Top Menu -->
			</div>
		</div>
		<!-- === END HEADER === -->
				<!-- === BEGIN CONTENT === -->
		<div id="content" class="container">
			<div class="row margin-vert-30">
				<!-- Register Box -->
				<div class="col-md-6 col-md-offset-3 col-sm-offset-3">
					<form method="POST">
						<div class="signup-header">
							<h2>Register a new account</h2>
							<p>Already a member? Click <a href="#">HERE</a> to login to your account.</p>
						</div>
						First Name
						<input class="form-control margin-bottom-20" type="text" name="fn">
						
						Last Name
						<input class="form-control margin-bottom-20" type="text" name="ln">
						Address<br><textarea rows="3" cols="55" name="add">
							
						</textarea><br>
						
						Email Address <span class="color-red">*</span>
						<input class="form-control margin-bottom-20" type="text" name="eid">
						<div class="row">
							<div class="col-sm-6">
								Password <span class="color-red">*</span>
								<input class="form-control margin-bottom-20" type="password" name="pass">
							</div>
							<div class="col-sm-6">
								Confirm Password <span class="color-red">*</span>
								<input class="form-control margin-bottom-20" type="password" name="pass1">
							</div>
						</div>
							<div class="col-lg-4 text-right">
								<button class="btn btn-primary" type="submit" name="submit">Register</button>
							</div>
						</div>
					</form>
					<?php
include("connection.php");
if(isset($_POST['submit'])!='')
{
$fn=$_POST["fn"];
$ln=$_POST["ln"];
$eid=$_POST['eid'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];

{
$insert=mysql_query("INSERT INTO signup(fn,ln,email,pass,pass1) VALUES
    ('$fn','$ln','$eid','$pass','$pass1')");
if($insert)
{
	?>
<script type="text/javascript">
	alert("Your registration has been successfull");
</script>
	<?php
	
}
else
{
	?>
	<script type="text/javascript">
	alert("Signup Failed. Please refill the form");
	</script>

	<?php
}
	
}
}

?>
				</div>
				<!-- End Register Box -->
			</div>
		</div>
		<!-- === END CONTENT === -->
<!-- Footer Menu -->
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
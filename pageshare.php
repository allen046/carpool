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
						
						<li><a href="logout.php">Logout</a></li>
					</ul>				</div>
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
						<form method="POST">
							<div class="login-header margin-bottom-30">
								<h2>Share your car</h2>
							</div>
							<div class="input-group margin-bottom-20">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input placeholder="Enter your name" class="form-control" type="text" name="cname">
							</div>
							<div class="input-group margin-bottom-20">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input placeholder="Enter you are starting from" class="form-control" type="text" name="src">
							</div>
							<div class="input-group margin-bottom-20">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input placeholder="Enter where you are going" class="form-control" type="text" name="des">
							</div>
							<div class="input-group margin-bottom-20">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input placeholder="Enter where you are going" class="form-control" type="date" name="dte">
							</div>
							<div class="input-group margin-bottom-20">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input placeholder="Enter the your contact number" class="form-control" type="number" name="cno">
							</div>
							
							
							

							<div class="row">
								<div class="col-md-6">
									
								</div>
								<div class="col-md-6">
									<button class="btn btn-primary pull-right" type="submit" name="submit">Submit</button>
								</div>
							</div>
							<hr>
							
						</form>
						<?php
include("connection.php");
if(isset($_POST['submit'])!="")
{
$cname=$_POST['cname'];
$src=$_POST['src'];
$des=$_POST['des'];
$dte=$_POST['dte'];
$cno=$_POST['cno'];

$insert=mysql_query("INSERT INTO share(cname,src,des,dte,cno) VALUES
    ('$cname','$src','$des','$dte',$cno')");
if($insert)
{		
	?>
	<script type="text/javascript">
		alert("success");
		</script>
<?php
}
else
{
	?>
	<script type="text/javascript">
		alert("fail");
		</script>
<?php
	
}
}
?>
					</div>
					<!-- End Login Box -->
				</div>
			</div>
			<center>
				<a href="pagebook.php"><p><b>Or wanna book a ride?</b></p></a>
			</center>
		</div>
		<!-- === END CONTENT === -->
		<br>

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
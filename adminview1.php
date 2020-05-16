<!-- === BEGIN HEADER === -->
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
			<div class="col-md-12 margin-top-30">
				<div id="hornav" class="pull-right visible-lg">
					<ul class="nav navbar-nav">
						<li><a href="adminview.php"> View members of the website</a></li>
						<li><a href="adminview2.php"><span>View Car booking members</span>
							
						</li>
						
						
							
						
						
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
					<h3>People interested in sharing their cars</h3>
					<div class="col-md-6 col-md-offset-3 col-sm-offset-3">
						
							
							
						

				
						<?php 
 include('connection.php');
 $sql="SELECT * FROM  share order by no asc";
 $array=mysql_query($sql) or die(mysql_error());
 while($userrow =mysql_fetch_array($array))
 {
  $name=$userrow['cname'];
  $sp=$userrow['sp'];
  
  $ep=$userrow['ep'];
   
   
  
  
  
  $cno=$userrow['cno'];


?>
  
 
 <div class="display">
 <p>&nbsp;</p>
 </div><font-size="3">
 <table width="388" height="164" border="1" color="blue" >
 <tr>
   <td width="176"> Name of person:</td>
   <td width="129"><?php echo $name;?></td>

   </tr>
   <tr>
   <td width="176">Starting point of the person</td>
   <td><span><?php echo $sp; ?></span></td>
  
   </tr>

   <tr>
   <td width="176">Ending point of the person</td>
   <td><span><?php echo $ep;?></span></td>
  
   </tr>

   

   <tr>
   <td width="176">Contact number of the person</td>
   <td><span><?php echo $cno; ?></span></td>
  
   </tr>
   
   
  
   
   </table>
    <?php } ?>

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
		<br>
		<br>
		<br>
		<br>
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
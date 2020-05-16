<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<!-- Title -->
	<title>Substance - Professional Bootstrap Template</title>
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
	<div id="pre_header" class="visible-lg">
		
	</div>
	<div id="header" class="container">
		
		<div class="row">
		
			<!-- Logo -->
			<div class="logo">
				<a href="index.html" title="">
					<img src="assets/img/logo.png" alt="Logo" />
				</a>
			</div>
			<!-- End Logo -->
			<!-- Top Menu -->
			<div class="col-md-12 margin-top-30">
				<div id="hornav" class="pull-right visible-lg">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
						<li><span>Features</span>
							<ul>
								<li class="parent"><span>Typography</span>
									<ul>
										<li><a href="features-typo-basic.html">Basic Typography</a></li>
										<li><a href="features-typo-blockquotes.html">Blockquotes</a></li>
									</ul>
								</li>
								<li class="parent"><span>Components</span>
									<ul>
										<li><a href="features-labels.html">Labels</a></li>
										<li><a href="features-progress-bars.html">Progress Bars</a></li>
										<li><a href="features-panels.html">Panels</a></li>
										<li><a href="features-pagination.html">Pagination</a></li>
									</ul>
								</li>
								<li class="parent"><span>Icons</span>
									<ul>
										<li><a href="features-icons.html">Icons General</a></li>
										<li><a href="features-icons-social.html">Social Icons</a></li>
										<li><a href="features-icons-font-awesome.html">Font Awesome</a></li>
										<li><a href="features-icons-glyphicons.html">Glyphicons</a></li>
									</ul>
								</li>
								
								<li><a href="features-testimonials.html">Testimonials</a></li>
								<li><a href="features-accordions-tabs.html">Accordions & Tabs</a></li>
								<li><a href="features-buttons.html">Buttons</a></li>
								<li><a href="features-carousels.html">Carousels</a></li>
								<li><a href="features-grid.html">Grid System</a></li>
								<li><a href="features-animate-on-scroll.html">Animate On Scroll</a></li>
							</ul>
						</li>
						<li><a href="page-login.html"><span>Login</span>
							
						</li>
						<li><span>Portfolio</span>
							<ul>
								<li><a href="portfolio-2-column.html">2 Column</a></li>
								<li><a href="portfolio-3-column.html">3 Column</a></li>
								<li><a href="portfolio-4-column.html">4 Column</a></li>
								<li><a href="portfolio-6-column.html">6 Column</a></li>
							</ul>
						</li>
						<li><span>Blog</span>
							<ul>
								<li><a href="blog-list.html">Blog</a></li>
								<li><a href="blog-single.html">Blog Single Item</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
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
$eid=$POST['eid'];
$pass=$POST['pass'];
$pass1=$POST['pass1'];
$insert=mysql_query("INSERT INTO pgsu(fn,ln,email,pass,pass1) VALUES
    ('$fn','$ln','$eid','$pass','$pass1')");
if($insert)
{
	echo "success";
	header("location:pages-login.php");
}
else
{
	"fail";
}
}
?>
				</div>
				<!-- End Register Box -->
			</div>
		</div>
		<!-- === END CONTENT === -->
		<!-- === BEGIN FOOTER === -->
		
		<div id="base">
			<div class="container padding-vert-30">
				<div class="row">
					<!-- Thumbs Gallery -->
					<div class="col-md-3 margin-bottom-20">
						<h3 class="margin-bottom-10">Portfolio Highlights</h3>
						<div class="thumbs-gallery">
							
							<a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image1.jpg">
								<img src="assets/img/thumbsgallery/thumbs/image1.jpg" alt="image1.jpg">
							<i></i></a>
							
							
							<a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image2.jpg">
								<img src="assets/img/thumbsgallery/thumbs/image2.jpg" alt="image2.jpg">
							<i></i></a>
							
							
							<a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image3.jpg">
								<img src="assets/img/thumbsgallery/thumbs/image3.jpg" alt="image3.jpg">
							<i></i></a>
							
							
							<a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image4.jpg">
								<img src="assets/img/thumbsgallery/thumbs/image4.jpg" alt="image4.jpg">
							<i></i></a>
							
							
							<a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image6.jpg">
								<img src="assets/img/thumbsgallery/thumbs/image6.jpg" alt="image6.jpg">
							<i></i></a>
							
							
							<a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image7.jpg">
								<img src="assets/img/thumbsgallery/thumbs/image7.jpg" alt="image7.jpg">
							<i></i></a>
							
							
							<a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image8.jpg">
								<img src="assets/img/thumbsgallery/thumbs/image8.jpg" alt="image8.jpg">
							<i></i></a>
							
							
							<a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image9.jpg">
								<img src="assets/img/thumbsgallery/thumbs/image9.jpg" alt="image9.jpg">
							<i></i></a>
							
							
							<a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image92.jpg">
								<img src="assets/img/thumbsgallery/thumbs/image92.jpg" alt="image92.jpg">
							<i></i></a>
							
							
							<a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image94.jpg">
								<img src="assets/img/thumbsgallery/thumbs/image94.jpg" alt="image94.jpg">
							<i></i></a>
							
							
							<a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image95.jpg">
								<img src="assets/img/thumbsgallery/thumbs/image95.jpg" alt="image95.jpg">
							<i></i></a>
							
							<a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image96.jpg">
								<img src="assets/img/thumbsgallery/thumbs/image96.jpg" alt="image96.jpg">
							<i></i></a>
							
							</div>			<div class="clearfix"></div>
						</div>
						<!-- End Thumbs Gallery -->
						<!-- Contact Details -->
						<div class="col-md-3 margin-bottom-20">
							<h3 class="margin-bottom-10">Contact Details</h3>
							<p>Quay View,<br />
							Mullaghmore,<br />
							Co. Sligo,<br />
							Ireland</p>
							<p>Email: <a href="mailto:info@website.com">info@website.com</a><br />
							Website: <a href="http://www.website.com/">www.website.com</a></p>
						</div>
						<!-- End Contact Details -->
						<!-- Sample Menu -->
						<div class="col-md-3 margin-bottom-20" >
							<h3 class="margin-bottom-10">Sample Menu</h3>
							<ul class="menu">
								<li>
									<a class="fa-tasks" href="#" >Placerat facer possim</a>
								</li>
								<li>
									<a class="fa-users" href="#" >Quam nunc putamus</a>
								</li>
								<li>
									<a class="fa-signal" href="#" >Velit esse molestie</a>
								</li>
								<li>
									<a class="fa-coffee" href="#">Nam liber tempor</a>
								</li>
							</ul>
							<div class="clearfix"></div>
							
						</div>
						<!-- End Sample Menu -->
						<!-- Disclaimer -->
						<div class="col-md-3 margin-bottom-20">
							<h3 class="margin-bottom-10">Disclaimer</h3>
							<p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with this template. Links are provided if you wish to purchase them from their copyright owners.</p>
							<div class="clearfix"></div>
						</div>
						<!-- End Disclaimer -->
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- Footer Menu -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<div id="copyright" class="col-md-4">
							<p>(c) 2014 Your Copyright Info</p>
						</div>
						<div id="footermenu" class="col-md-8">
							<ul class="list-unstyled list-inline pull-right">
								<li>
									<a href="#" target="_blank" >Sample Link</a>
								</li>
								<li>
									<a href="#" target="_blank" >Sample Link</a>
								</li>
								<li>
									<a href="#" target="_blank" >Sample Link</a>
								</li>
								<li>
									<a href="#" target="_blank" >Sample Link</a>
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
<!-- JS -->
<script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
<!-- Isotope - Portfolio Sorting -->
<script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
<!-- Mobile Menu - Slicknav -->
<script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
<!-- Animate on Scroll-->
<script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
<!-- Slimbox2-->
<script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
<!-- Modernizr -->
<script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
<!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->
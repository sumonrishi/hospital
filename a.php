<!DOCTYPE HTML>
<html>

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Mankind Hospital</title>


	<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="s.css/bootstrap.min.css">
	<link rel="stylesheet" href="s.css/out.css">
	<link rel="stylesheet" href="s.css/style.css">

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/responsiveslides.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function() {

			// Slideshow 1
			$("#slider1").responsiveSlides({
				maxwidth: 1600,
				speed: 600
			});
		});
	</script>

</head>

<body>
	<!--start-wrap-->

	<header>
		<div class="header-pinned">
			<?php include("inc/header.php"); ?>
		</div>
	</header>

	<!--start-header-->

	<div class="clear"> </div>
	<!--start-image-slider---->
	<div class="image-slider">
		<!-- Slideshow 1 -->
		<!-- <ul class="rslides" id="slider1">
			<li><img src="images/slider-image1.jpg" alt=""></li>
			<li><img src="images/slider-image2.jpg" alt=""></li>
			<li><img src="images/slider-image1.jpg" alt=""></li>
		</ul> -->
		<!-- Slideshow 2 -->
	</div>
	<!--End-image-slider---->
	<div class="clear"> </div>
	<div class="content-grids">
		<div class="wrap">
			<div class="section group" style="max-width: 1600px; margin:auto;">


				<div class="listview_1_of_3 images_1_of_3" style="margin-left: 250px;">
					<div class="listimg listimg_1_of_2">
						<img src="images/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						<h3>Patients</h3>
						<p>Register & Book Appointment</p>
						<div class="button"><span><a href="hms/user-login.php">Click Here</a></span></div>
					</div>
				</div>

				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						<img src="images/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
						<h3>Doctors Login</h3>
						<div class="button"><span><a href="hms/doctor/">Click Here</a></span></div>
					</div>
				</div>

				<!-- 
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						<img src="images/grid-img2.png">
					</div>
					<div class="text list_1_of_2">
						<h3>Admin Login</h3>

						<div class="button"><span><a href="hms/admin">Click Here</a></span></div>
					</div>
				</div> -->


			</div>
		</div>
	</div>
	
	<div class="clear"> </div>
	<div class="footer">
		<div class="wrap">
			<div class="footer-left" style="margin-left: 600px;">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="contact.php">contact</a></li>
				</ul>
			</div>

			<div class="clear"> </div>
		</div>
	</div>
	<!--end-wrap-->
</body>

</html>
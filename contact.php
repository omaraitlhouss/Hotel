<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OREN -Contact</title>
    <meta name="description" content="OREN is responsive multi-purpose HTML5 template compatible with Bootstrap 4. Take your Startup business website to the next level. It is designed for agency, creative studio, freelance, personal, corporate digital, businesses or any type of person or business who wants to showcase their work, services and professional way.">
    <meta name="keywords" content="agency, business, corporate, creative studio, freelance, gradient, multipurpose. photography, parallax, personal, responsive">
    <meta name="author" content="rometheme.net"> 
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
    <script src="js/vendor/modernizr.min.js"></script>

</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!--Header-->
	<?php include 'header.php'; ?>
 
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/cont.jpg" style="background-size: 100% 100%;">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page"></div>
			</div>
			
		</div>
	</div>

	<!-- CONTACT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">				


				<div class="row mb-5">
					<div class="col-sm-12 col-md-12">

						<h2 class="section-heading text-primary text-center no-after mb-4">
							Have a Question?
						</h2>
						
					</div>					
				</div>

				<div class="row">
					
					<div class="col-sm-12 col-md-12 col-lg-8">
						
						<form action="admin/includes/actions.php" class="form-contact" method="POST" id="" data-toggle="validator" novalidate="true">
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label for="p_name">Full Name</label>
										<input type="text" class="form-control" id="fullnom" name="fullnom" placeholder="" required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label for="p_email">Email address</label>
										<input type="email" class="form-control" id="adress" name="adress" placeholder="" required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label for="p_subject">Subject</label>
										<input type="text" class="form-control" id="subject" name="subject" placeholder="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label for="p_phone">Phone Number</label>
										<input type="text" class="form-control" name="tele" id="tele" placeholder="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="p_message">Your Message</label>
								 <textarea id="p_message" class="form-control" name="mesage" id="mesage" rows="6" placeholder=""></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								
								<div id="success"></div>
								 <input type="hidden" name="action" value="contact">
								<button type="submit" class="btn btn-primary">SEND MESSAGE</button>
								
							</div>
						</form>
					
					</div>
					<div class="col-sm-12 col-md-12 col-lg-4">
						
						<div class="rs-icon-info-2 mb-3">
							<div class="info-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="body-text">
								<h4 class="text-black">Address</h4>
								<p>JI.PAHLAWAN VII </p>
							</div>
						</div>

						<div class="rs-icon-info-2 mb-3">
							<div class="info-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="body-text">
								<h4 class="text-black">Email</h4>
								<p>Oren@Gmail.com</p>
							</div>
						</div>

						<div class="rs-icon-info-2 mb-3">
							<div class="info-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="body-text">
								<h4 class="text-black">Phone</h4>
								<p>+212539264879 <br>+212465982744</p>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- MAPS -->
	<div class="maps-wraper">
		<div id="cd-zoom-in"></div>
		<div id="cd-zoom-out"></div>
		<div id="maps" class="maps" data-lat="-7.452278" data-lng="112.708992" url="">
		</div>
	</div>

	

	<!-- FOOTER SECTION -->
	<?php include 'footer.php' ?>
	
	<!-- JS VENDOR -->
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/owl.carousel.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="js/vendor/isotope.pkgd.min.js"></script>
	<script src="js/vendor/imagesloaded.pkgd.min.js"></script>

	<!-- SENDMAIL -->
	<script src="js/vendor/validator.min.js"></script>
	<script src="js/vendor/form-scripts.js"></script>

	<!-- GOOGLEMAP -->
	<script src="js/googlemap-setting.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU&callback=initMap"> </script>

	<script src="js/script.js"></script>
	
</body>
</html>
<?php if(isset($_GET['msg'])){
	$msg=$_GET['msg']; ?>
	<script type="text/javascript">
		alert('<?php echo $msg; ?>');
	</script>
<?php } ?>
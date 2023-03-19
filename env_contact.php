
 
 
<!DOCTYPE html>

<html lang="en">

  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OREN - Contact</title>
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
	<div class="section banner-page" data-background="images/slide1.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Contact</div>
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
							Votre Message Est Envoyé !!!
						</h2>
						
					</div>					
				</div>

				
<?php 

$fullnom= $_GET['fullnom'];
$adress= $_GET['adress'];
$subject= $_GET['subject'];
$tele= $_GET['tele'];
$mesage=$_GET['mesage'];
?>
			<div class="row">	
					<div class="col-sm-12 col-md-12 col-lg-4">
						
						<div class="box-widget shadow bgi-cover-center mb-5 gradasi-primary">
							<h3>Information de reservations</h3>
							<ul class="list-info">
								<li>
									<div class="info-icon">Full Nom:</div>
									<div class="info-text"><?php echo $fullnom; ?></div> 
								</li>
								<li>
									<div class="info-icon">Adress:</div>
									<div class="info-text"><?php echo $adress; ?></div> 
								</li>
								<li>
									<div class="info-icon">Subject:</div>
									<div class="info-text"><?php echo $subject; ?></div> 
								</li>
								<li>
									<div class="info-icon">Tele:</div>
									<div class="info-text"><?php echo $tele; ?></div> 
								</li>
								<li>
									<div class="info-icon">Mesage:</div>
									<div class="info-text"><?php echo $mesage; ?></div> 
								</li>
							
								
							</ul>
						</div>

					</div>

				</div> 
			</div>
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

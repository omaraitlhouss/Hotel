
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OREN - CLIENT</title>
    <meta name="description" content="OREN is responsive multi-purpose HTML5 template compatible with Bootstrap 4. Take your Startup business website to the next level. It is designed for agency, creative studio, freelance, personal, corporate digital, businesses or any type of person or business who wants to showcase their work, services and professional way.">
    <meta name="keywords" content="agency, business, corporate, creative studio, freelance, gradient, multipurpose. photography, parallax, personal, responsive">
    <meta name="author" content="rometheme.net"> 
	<style type="text/css">
		input{
			background-color: #e6ff99;
		}
	</style>
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
	<link rel="stylesheet" href="css/style.css" />
	
    <script src="js/vendor/modernizr.min.js"></script>

</head>

<body>
	<?php /*$id=$_GET['id'];
	echo $id;*/ ?>
	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>


	<!--Header-->
	<?php include 'header.php'; ?>
 
 
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/client.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Client</div>
			</div>
			
		</div>
	</div>

	<!-- CONTACT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">				


				<div class="row mb-5">
					<div class="col-sm-12 col-md-12">

						<h2 class="section-heading text-primary text-center no-after mb-4" style="text-decoration: underline;">
							ENTRER VOTRE INFORMATIONS
						</h2>
						<p class="subheading text-center mb-4">Nous respectons votre vie privée.<a href="#">#</a></p>
					</div>					
				</div>
<?php 
$pays=$_GET['pays'];
$ville=$_GET['ville'];
$hotel=$_GET['hotel'];
$id=$_GET['id']; //id cham
$datearr=$_GET['datearr'];
$datedep=$_GET['datedep'];

$nbrchambre= $_GET['nbrchambre'];
$nbradultes= $_GET['nbradultes'];
$nbrenfants= $_GET['nbrenfants'];
?>
				<div class="row">
					
					<div class="col-sm-12 col-md-12 col-lg-8">
						
						<div class="p-4 shadow">
							
							<form action="services.php?id=<?php echo $id ?>&pays=<?php echo $pays ?>&ville=<?php echo $ville ?>&hotel=<?php echo $hotel ?>&nbrchambre=<?php echo $nbrchambre ?>&nbradultes=<?php echo $nbradultes ?>&nbrenfants=<?php echo $nbrenfants ?>&datearr=<?php echo $datearr ?>&datedep=<?php echo $datedep ?>" method="POST">
								
								<div class="form-group">
									<label for="p_cin">CIN</label>
									<input type="text" class="form-control" style="background-color: #f1f5e7;" id="p_cin" placeholder="" required="" name="cin">
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group">
									<label for="p_prenom">Prénom</label>
									<input type="text" class="form-control" style="background-color: #f1f5e7;" id="p_prenom" placeholder="" required="" name="prenom">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<label for="p_nom">Nom</label>
									<input type="text" class="form-control" style="background-color: #f1f5e7;" id="p_nom" placeholder="" required="" name="nom">
									<div class="help-block with-errors"></div>
								</div>
							
							
								<div class="form-group">
									<label for="p_tele">Téléphone</label>
									<input type="text" class="form-control" style="background-color: #f1f5e7;" id="p_tele" placeholder="" required="" name="telephone">
									<div class="help-block with-errors"></div>
								</div>
							
							
								<div class="form-group">
									<label for="p_email">E-mail</label>
									<input type="email" class="form-control" style="background-color: #f1f5e7;" id="p_email" placeholder="" required="" name="email">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<label for="p_nom">Adress</label>
									<input type="text" class="form-control" style="background-color: #f1f5e7;" id="p_nom" placeholder="" required="" name="adress">
									<div class="help-block with-errors"></div>
								</div>	
								<div class="form-group">
									<label for="p_pays">Pays</label>
									<input type="text" class="form-control" style="background-color: #f1f5e7;" id="p_pas" placeholder="" required="" name="payscli">
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group">
									<label for="p_ville">Ville</label>
									<input type="text" class="form-control" style="background-color: #f1f5e7;" id="p_ville" placeholder="" required="" name="villecli">
									<div class="help-block with-errors"></div>
								</div>

								

								<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-primary">confirmer</button>
							</div>
							</form>
						</div>

					</div>
					<div class="col-sm-12 col-md-12 col-lg-4">
						
						
							<div class="box-widget shadow bgi-cover-center mb-5 gradasi-primary">
							<h3 style="text-decoration: underline;">Information de Reservations</h3>
							<ul class="list-info">
								<li>
									<div class="info-icon" style="width: 39%;">Pays:</div>
									<div class="info-text"><?php echo $pays ?> </div> 
								</li>
								<li>
									<div class="info-icon" style="width: 35%;">Ville:</div>
									<div class="info-text"><?php echo $ville ?></div> 
								</li>
								<li>
									<div class="info-icon" style="width: 17%;">Hotel:</div>
									<div class="info-text"><?php echo $hotel ?></div> 
								</li>
								
								<li>
									<div class="info-icon" style="width: 45%;">Date Arrive:</div>
									<div class="info-text"><?php echo $datearr ?></div> 
								</li>
								<li>
									<div class="info-icon" style="width: 45%;">Date Depart:</div>
									<div class="info-text"><?php echo $datedep ?></div> 
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
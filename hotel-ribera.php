<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OREN - HOTEL RIBERA</title>
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

    <!--Formulaire-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>
		#inputState{
			width:10%;
			display: inline;
			margin-top: 7px;
		}
		#date{
			width:21%;
		}
		.container .form-group {display:inline;padding:10px}
		.containerDate{
			max-width: 100%;
			width:72%;
			margin: 1%;
			text-align: center;
		}
		.btn{
			vertical-align: baseline;
		}
		</style>
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
	<div class="section banner-page" data-background="images/cov6.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Hotel Ribera</div>
			</div>
		</div>
	</div>
<!--Formulaire Reserver-->
	<div style="background-color: #313131;padding-top: 32px;color: #fff;">
	<div class="container">
		<div class="footer-title" style="color: #E63F64;text-align: center;margin-top: -16px;font-size: 24px;font-weight: 700;border-bottom: double;">
								RÉSERVEZ VOTRE HÔTEL
							</div>
		<form  action="chambre.php" method="POST">
			
			
		<div class="form-group">
	      	<label for="inputState">Pays : </label>
	      	<select id="inputState" class="form-control" name="pays" style="width: 17%;">
	        <option selected>Italy</option>
	       
	      </select>
	  </div>
	<div class="form-group">
	      <label for="inputState">Ville : </label>
	      <select id="inputState" class="form-control" name="ville" style="width: 26%;"> 
	        <option selected>RIBERA</option>
	        
	      </select>
	  </div>
	 <div class="form-group" style="margin-left: 15px;">
	      <label for="inputState">hotel : </label>
	      <select id="inputState" class="form-control" name="hotel" style="width: 35%;">
	        <option selected>OHen HOTEL Verdura Resort</option>
	       
	      </select>
	  </div>
	<div class="form-group" style="margin-left: -10px">
	      <label for="inputState">Chambres : </label>
	      <select id="inputState" class="form-control" name="nbrchambre" style="width: 158px;">
	        <option selected>1</option>
	        <option>2</option>
	        <option>3</option>
	        <option>4</option>
	      </select>
	  </div>

	  <div class="form-group" style="margin-left: 13px;">  
	      <label for="inputState">Adultes : </label>
	      <select id="inputState" class="form-control" name="nbradultes" style="width: 253px;">
	        <option selected>1</option>
	        <option>2</option>
	        <option>3</option>
	       
	      </select>
	  </div>
	  <div class="form-group">
	      <label for="inputState">Enfants : </label>
	      <select id="inputState" class="form-control" name="nbrenfants" style="width: 138px;">
	        <option selected> 0</option>
	        <option>1</option>
	        <option>2</option>
	        <option>3</option>
	      </select>
	  </div>
  </div>

  <div class="container">
  	<div class="containerDate">
    <div class="form-group"">
    	<label style="margin-left: -67px;">Date d'arrivé : </label>
    	<input type="date" name="dateArr" id="date" class="form-control" style="display:inline">
    	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  
    	<label>Date d'épart : </label>
    	
    	<input type="date" name="dateDep" id="date" class="form-control" style="display:inline">
    	&nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp
    	<input type="submit" name="submit"  class="btn btn-primary" style="margin-left: 39px;margin-right: -61px;" value="Reserver">
    </div>
</div>
    </div>
   

</form>
</br>

</div>
	
	<!-- PORTFOLIO -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">						

				<div class="row">
					<div class="col-sm-8 col-md-8">
						<img src="images/mun3.jpg" alt="" class="img-fluid shadow" style="">
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="row">
							<div class="col-sm-12 col-md-12 mb-4">
								<img src="images/mun4.jpg" alt="" class="img-fluid shadow">
							</div>
							<div class="col-sm-12 col-md-12">
								<img src="images/mun5.jpg" alt="" class="img-fluid shadow">
							</div>
						</div>
					</div>
				</div>

				<div class="content-wrap">
					<div class="row">

						<div class="col-sm-12 col-md-8">
							<h3 class="text-primary">DÉTAILS SUR L'HÔTEL</h3>
							<p>Niché au cœur de 230 hectares d'oliviers dans la campagne sicilienne, bordé par 2 km de côte, le Verdura Resort propose une plage privée, 3 parcours de golf et des vues imprenables sur la mer.

Les chambres spacieuses du Verdura Resort comprennent un balcon, un lit king-size, une télévision par satellite et une grande salle de bains privative. Certaines possèdent leur propre cour et terrasse privées surplombant la mer Méditerranée.

Parmi les équipements gratuits fournis par le Verdura Resort, vous trouverez un sac et une serviette de plage ainsi que des peignoirs.

Les nombreuses installations sportives du Verdura incluent 6 courts de tennis, deux parcours de golf de 18 trous et un parcours de 9 trous, une piscine à débordement de 60 mètres et une salle de sport. Les pistes de course à pied traversent les plantations de citronniers et les oliveraies.

Par ailleurs, le Verdura Resort propose 4 piscines de thalassothérapie, un programme de soins de beauté et une variété de massages.

Les restaurants et bars du complexe servent tous une large sélection de vins raffinés et une cuisine typiquement sicilienne.

Les couples apprécient particulièrement l'emplacement de cet établissement. Ils lui donnent la note de 9,3 pour un séjour à deux.</p>
						</div>
						<div class="col-sm-12 col-md-4">
							<p class="uk18 text-black mb-1"><strong>Date d'ouverture :</strong></p>
							<p>10th Mai, 2017</p>
							<p class="uk18 text-black mb-1"><strong>Etoils :</strong></p>
							<p>4</p>
										
						</div>
						
						<div class="col-sm-12 col-md-8">
							<h3 class="text-primary">Ses Point Forts</h3>
							<p>Parking gratuit </br> Spa et centre de bien-être </br> Connexion Wi-Fi gratuite </br> Piscine </br> Piscine extérieure </br> Bar</p>
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

	<script src="js/script.js"></script>

</body>
</html>
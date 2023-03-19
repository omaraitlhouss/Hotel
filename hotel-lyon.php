<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OREN - HOTEL LYON</title>
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
	<div class="section banner-page" data-background="images/cov2.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Hotel Lyon</div>
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
	        <option selected>France</option>
	       
	      </select>
	  </div>
	<div class="form-group">
	      <label for="inputState">Ville : </label>
	      <select id="inputState" class="form-control" name="ville" style="width: 26%;"> 
	        <option selected>LYON</option>
	        
	      </select>
	  </div>
	 <div class="form-group" style="margin-left: 15px;">
	      <label for="inputState">hotel : </label>
	      <select id="inputState" class="form-control" name="hotel" style="width: 35%;">
	        <option selected>OHen HOTEL TERMINUS LYON</option>
	       
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
						<img src="images/lyon2.jpg" alt="" class="img-fluid shadow" style="margin-top: 25px;">
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="row">
							<div class="col-sm-12 col-md-12 mb-4">
								<img src="images/toulouse1.jpg" alt="" class="img-fluid shadow">
							</div>
							<div class="col-sm-12 col-md-12">
								<img src="images/lyon1.jpg" alt="" class="img-fluid shadow">
							</div>
						</div>
					</div>
				</div>

				<div class="content-wrap">
					<div class="row">

						<div class="col-sm-12 col-md-8">
							<h3 class="text-primary">DÉTAILS SUR L'HÔTEL </h3>
							<p>Idéalement situé dans le 12ème arrondissement, en face de la gare de Lyon, l'Hôtel OHen Terminus Lyon se trouve à 10 minutes à pied de la place de la Bastille. Ses hébergements climatisés sont équipés d'une connexion Wi-Fi gratuite et d'une télévision par satellite. Desservies par un ascenseur, toutes les chambres de l'hôtel OHen Terminus Lyon comprennent une salle de bains privative avec baignoire ou douche et sèche-cheveux. Un service d'étage est également assuré. Des chambres quadruples sont à la disposition des groupes et des familles.Un petit-déjeuner buffet complet est servi tous les matins à l'hôtel Terminus Lyon, tandis que des distributeurs automatiques de boissons fraîches sont disponibles sur place 24h/24 et 7j/7. Vous pourrez vous détendre au bar et lire les journaux quotidiens à votre disposition.

L'hôtel abrite une réception ouverte 24h/24, une bagagerie et un service de billetterie. Le personnel se fera un plaisir de vous donner des conseils pour profiter au mieux de votre séjour à Paris.

Le Terminus Lyon est implanté à proximité de nombreux restaurants et transports en commun. La gare RER Gare de Lyon vous permettra de rejoindre directement les Champs-Élysées, le quartier d'affaires de La Défense ou encore Disneyland Paris.

Ce quartier (12e arr.) est un choix idéal pour les voyageurs qui s'intéressent à ces thèmes : l'histoire, les cathédrales et l'architecture.

C'est le quartier préféré des voyageurs visitant Paris, selon les commentaires clients indépendants.

Les couples apprécient particulièrement l'emplacement de cet établissement. Ils lui donnent la note de 8,9 pour un séjour à deux.</p>
						</div>
						<div class="col-sm-12 col-md-4">
							<p class="uk18 text-black mb-1"><strong>Date d'ouverture :</strong></p>
							<p>10th Janvier, 2018</p>
							<p class="uk18 text-black mb-1"><strong>Etoils :</strong></p>
							<p>3</p>
										
						</div>
						
						<div class="col-sm-12 col-md-8">
							<h3 class="text-primary">ATTRACTIONS ET ACTIVITÉS</h3>
							<p> Connexion Wi-Fi gratuite </br> Chambres familiales </br> Navette aéroport </br> Chambres non-fumeurs </br> Restaurant </br> Réception ouverte 24h/24 </br> Bar</p>
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
<?php 
include "admin/includes/conx.php";
  $prepare=$pdo->query("select * from hotel where Pays='Algerie'");
  $hotels=$prepare->fetchAll(PDO::FETCH_OBJ);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OREN - ALGERIE</title>
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
	<div class="section banner-full bgi-cover-center" data-background="images/morocco-camel-caravan-1440x561.jpg">
		<div class="container h-100 d-flex align-items-center">
			
        	<div class="wrap-caption text-white">
                <h1 class="caption-heading">Séjournez A Algerie<br>with OREN.</h1>
                <p class="">Dans l'un de nos 6 Hôtels</p>
            
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
	        <option selected>Algerie</option>
	      
	      
	      </select>
	  </div>
	<div class="form-group">
	      <label for="inputState">Ville : </label>
	      <select id="inputState" class="form-control" name="ville" onclick="m(ville.value)" style="width: 26%;"> 
	       <option selected>ALGER</option>
	        <option >ZERALDA</option>
	        <option >ORAN</option>
	        <option >CONSTANTINE</option>
	        <option >CHERAGA</option>
	        <option >ALGE</option>
	      </select>
	  </div>
	 <div class="form-group" style="margin-left: 15px;">
	      <label for="inputState">hotel : </label>
	      <select id="inputState" class="form-control" name="hotel" style="width: 35%;">
	        <option selected>OHen HOTEL Oasis Hotel Alger</option>
	       
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

	
<!-- OUR ARTICLES -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center text-primary no-after mb-5" style="text-decoration: underline;">
							Nos Hotels Au Algerie
						</h2>
						<p class="subheading text-center"></p>
					</div>
				</div>

				<div class="row mt-4">
					<?php foreach ($hotels as $hotel) { ?>
					<!-- Items-->
					<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
						<div class="rs-news-1">
							<!--Ville--><div class="meta-category"><?php echo $hotel->Ville; ?></div>
							<div class="media">
								<a href="hotel-<?php echo $hotel->Ville ?>.php">
									<img src="images/<?php echo $hotel->photo;?>.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="body">
							<!--Nom hotel--><div class="title"><a href="hotel-<?php echo $hotel->Ville ?>.php"><?php echo $hotel->Nom_hotel; ?></a></div>
							<!--tele-->	<div class="meta-date"><?php echo $hotel->Tele; ?></div>
							<!--desc-->	<p><?php echo substr($hotel->Desc_hotel, 0,400) ?>...</p>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>

				
			</div>
		</div>
	</div>

	
<!-- PORTFOLIO -->
	<div class="section portfolio" style="    margin-bottom: -35px;
    margin-top: -11%;">
		<div class="content-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2 class="section-heading text-center text-primary no-after mb-5" style="text-decoration: underline;">
						ALGERIE
					</h2>
					<p class="subheading text-center">NORD D'AFRIQUE</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="grid mt-3">
						<div class="grid-sizer"></div>
						<div class="gutter-sizer"></div>
						<!-- item 1 -->
						<div class="grid-item">
							<a href="images/a1.jpg" title="Portfolio 1"><img src="images/a1.jpg" alt=""></a>
						</div>
						<!-- item 2 -->
						<div class="grid-item">
							<a href="images/a7.jpg" title="Portfolio 2"><img src="images/a7.jpg" alt=""></a>
						</div>
						<!-- item 3 -->
						<div class="grid-item">
							<a href="images/a2.jpg" title="Portfolio 3"><img src="images/a2.jpg" alt=""></a>
						</div>
						<!-- item 4 -->
						<div class="grid-item">
							<a href="images/a8.jpg" title="Portfolio 4"><img src="images/a8.jpg" alt=""></a>
						</div>
						<!-- item 5 -->
						<div class="grid-item">
							<a href="images/a9.jpg" title="Portfolio 5"><img src="images/a9.jpg" alt=""></a>
						</div>
						<!-- item 6 -->
						<div class="grid-item">
							<a href="images/a3.jpg" title="Portfolio 6"><img src="images/a3.jpg" alt=""></a>
						</div>
						<!-- item 7 -->
						<div class="grid-item">
							<a href="images/a4.jpg" title="Portfolio 7"><img src="images/a4.jpg" alt=""></a>
						</div>
						<!-- item 8 -->
						<div class="grid-item">
							<a href="images/a12.jpg" title="Portfolio 8"><img src="images/a12.jpg" alt=""></a>
						</div>
						<!-- item 9 -->
						<div class="grid-item">
							<a href="images/a5.jpg" title="Portfolio 9"><img src="images/a5.jpg" alt=""></a>
						</div>
						<!-- item 10 -->
						<div class="grid-item">
							<a href="images/a11.jpg" title="Portfolio 10"><img src="images/a11.jpg" alt=""></a>
						</div>
						<!-- item 11 -->
						<div class="grid-item">
							<a href="images/a10.jpg" title="Portfolio 11"><img src="images/a10.jpg" alt=""></a>
						</div>
						<!-- item 12 -->
						<div class="grid-item">
							<a href="images/a6.jpg" title="Portfolio 12"><img src="images/a6.jpg" alt=""></a>
						</div>
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
	<script type="text/javascript" src="page-algerie.js">
		
	</script>
</body>
</html>
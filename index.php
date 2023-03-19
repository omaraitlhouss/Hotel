<?php 
 include "admin/includes/conx.php";
 
  $prepare=$pdo->query("select * from services");
  $services=$prepare->fetchAll(PDO::FETCH_OBJ);
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<!--Slider-->
  	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="WOWSlider" />
	<style>
.instuction {
	font-family: sans-serif, Arial;
	display: block;
	margin: 0 auto;
	max-width: 820px;
	width: 100%;
	padding: 0 70px;
	color: #222;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.instuction h1 img {
	max-width: 170px;
	vertical-align: middle;
	margin-bottom: 10px;
}
.instuction h1 {
	color: #2F98B3;
	text-align: center;
}
.instuction h2 {
	position: relative;
	font-size: 1.1em;
	color: #2F98B3;
	margin-bottom: 20px;
	margin-top: 40px;
}
.instuction h2 span.num {
	position: absolute;
	left: -70px;
	top: -18px;
	display: inline-block;
	vertical-align: middle;
	font-style: italic;
	font-size: 1.1em;
	width: 60px;
	height: 60px;
	line-height: 60px;
	text-align: center;
	background: #2F98B3;
	color: #fff;
	border-radius: 50%;
}
.instuction .mono {
	color: #000;
	font-family: monospace;
	font-size: 1.3em;
	font-weight: normal;
}
.instuction li.mono {
	font-size: 1.5em;
}

.instuction ul {
	font-size: 0.9em;
	margin-top: 0;
	padding-left: 0;
	list-style: none;
}
.instuction .note {
	color: #A3A3B2;
	font-style: italic;
	padding-top: 10px;
}
.instuction p.note {
	text-align: center;
	padding-top: 0;
	margin-top: 4px;
}
.instuction textarea {
	font-size: 0.9em;
	min-height: 60px;
	padding: 10px;
	margin: 0;
	overflow: auto;
	max-width: 100%;
	width: 100%;
}
.instuction a,
.instuction a:visited {
	color: #2F98B3;
}
</style>
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	


    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OREN</title>
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

    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/florence_italy_buildings_panorama_hdr_69304_1920x1080.jpg" alt="ITALY" title="ITALY" id="wows1_0"/></li>
		<li><img src="data1/images/france_paris_city_eiffel_tower_sky_clouds_sunset_59583_1920x1080.jpg" alt="FRANCE" title="FRANCE" id="wows1_1"/></li>
		<li><img src="data1/images/algeria3.jpg" alt="ALGERIE" title="ALGERIE" id="wows1_2"/></li>
		<li><img src="data1/images/germany_frankfurt_am_main_metropolis_panorama_architecture_tall_buildings_houses_streets_traffic_blue_sky_warm_sunny_day_clouds_horizon_59445_1920x1080.jpg" alt="GERMANY" title="GERMANY" id="wows1_3"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/herospaintoprovence.jpg" alt="html5 slideshow" title="SPAIN" id="wows1_4"/></a></li>
		<li><img src="data1/images/moroccofortifiedcity1440x561.jpg" alt="MAROC" title="MAROC" id="wows1_5"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="ITALY"><span><img src="data1/tooltips/florence_italy_buildings_panorama_hdr_69304_1920x1080.jpg" alt="ITALY"/>1</span></a>
		<a href="#" title="FRANCE"><span><img src="data1/tooltips/france_paris_city_eiffel_tower_sky_clouds_sunset_59583_1920x1080.jpg" alt="FRANCE"/>2</span></a>
		<a href="#" title="ALGERIE"><span><img src="data1/tooltips/algeria3.jpg" alt="ALGERIE"/>3</span></a>
		<a href="#" title="GERMANY"><span><img src="data1/tooltips/germany_frankfurt_am_main_metropolis_panorama_architecture_tall_buildings_houses_streets_traffic_blue_sky_warm_sunny_day_clouds_horizon_59445_1920x1080.jpg" alt="GERMANY"/>4</span></a>
		<a href="#" title="SPAIN"><span><img src="data1/tooltips/herospaintoprovence.jpg" alt="SPAIN"/>5</span></a>
		<a href="#" title="MAROC"><span><img src="data1/tooltips/moroccofortifiedcity1440x561.jpg" alt="MAROC"/>6</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">html5 slideshow</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	

<?php include "formu.php"; ?>
	
<!-- OUR ARTICLES -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center text-primary no-after mb-5" style="text-decoration: underline;">
							Nos Services
						</h2>
						<p class="subheading text-center"></p>
					</div>
				</div>

				<div class="row mt-4">
				<?php foreach ($services as $service) { ?>	
					<!-- Item 1 -->
					<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
						<div class="rs-news-1">
						<!--tarif--->	<div class="meta-category"><?php echo $service->Tarif_ser; ?>$</div>
							<div class="media">
								<a href="<?php echo $service->Nom_ser; ?>.php">
									<img src="images/<?php echo $service->photo;?>.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="body">
						<!--nom_ser-->		<div class="title"><a href="<?php echo $service->Nom_ser; ?>.php"><?php echo $service->Nom_ser; ?></a></div>
							
							<!--des-->	<p><?php echo substr($service->Desc_ser, 0,350) ; ?>... </p>
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
						CERTAINS DE NOS HOTELS
					</h2>
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="grid mt-3">
						<div class="grid-sizer"></div>
						<div class="gutter-sizer"></div>
						<!-- item 1 -->
						<div class="grid-item">
							<a href="images/n1.png" title="Portfolio 1"><img src="images/n1.png" alt=""></a>
						</div>
						<!-- item 2 -->
						<div class="grid-item">
							<a href="images/n7.jpg" title="Portfolio 2"><img src="images/n7.jpg" alt=""></a>
						</div>
						<!-- item 3 -->
						<div class="grid-item">
							<a href="images/n2.jpg" title="Portfolio 3"><img src="images/n2.jpg" alt=""></a>
						</div>
						<!-- item 4 -->
						<div class="grid-item">
							<a href="images/n8.jpg" title="Portfolio 4"><img src="images/n8.jpg" alt=""></a>
						</div>
						<!-- item 5 -->
						<div class="grid-item">
							<a href="images/n9.jpg" title="Portfolio 5"><img src="images/n9.jpg" alt=""></a>
						</div>
						<!-- item 6 -->
						<div class="grid-item">
							<a href="images/n3.jpg" title="Portfolio 6"><img src="images/n3.jpg" alt=""></a>
						</div>
						<!-- item 7 -->
						<div class="grid-item">
							<a href="images/n4.png" title="Portfolio 7"><img src="images/n4.png" alt=""></a>
						</div>
						<!-- item 8 -->
						<div class="grid-item">
							<a href="images/n12.jpg" title="Portfolio 8"><img src="images/n12.jpg" alt=""></a>
						</div>
						<!-- item 9 -->
						<div class="grid-item">
							<a href="images/n5.jpg" title="Portfolio 9"><img src="images/n5.jpg" alt=""></a>
						</div>
						<!-- item 10 -->
						<div class="grid-item">
							<a href="images/n11.jpg" title="Portfolio 10"><img src="images/n11.jpg" alt=""></a>
						</div>
						<!-- item 11 -->
						<div class="grid-item">
							<a href="images/n10.jpg" title="Portfolio 11"><img src="images/n10.jpg" alt=""></a>
						</div>
						<!-- item 12 -->
						<div class="grid-item">
							<a href="images/n6.jpg" title="Portfolio 12"><img src="images/n6.jpg" alt=""></a>
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
	<!--Formulaire-->
	<script type="text/javascript" src="index.js"></script>
	<!--Script Slider-->
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
</body>
</html>
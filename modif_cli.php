<?php 
 include "admin/includes/conx.php";
    $id=$_GET["id_cli"];
    $prepareo=$pdo->query("select * from client where Id='".$id."'");
    $clients=$prepareo->fetchAll(PDO::FETCH_OBJ);
   $client=$clients[0];

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<!--Slider-->
  	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="WOWSlider" />
	<title>PROFIL</title>
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
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
	<?php 
					/*		if(isset($_GET['id_cli'])){
	  						$id=$_GET["id_cli"];
	  						$clie=$pdo->query("select * from client where Id='".$id."'");
    						$cl=$clie->fetchAll(PDO::FETCH_OBJ);
						
							}
							 if(isset($_GET['cli_res'])){
	  						$id=$_GET["cli_res"];
	  						$cliee=$pdo->query("select * from client where Id='".$id."'");
    						$cl=$cliee->fetchAll(PDO::FETCH_OBJ);}
							  if(isset($_GET['ser_cli'])){
	  						$id=$_GET["ser_cli"];
	  						$cliee=$pdo->query("select * from client where Id='".$id."'");
    						$cl=$cliee->fetchAll(PDO::FETCH_OBJ);

							}*/
						 ?> 
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>
	<!-- HEADER -->
    <div class="header header-1">
							<?php 
							if(isset($_GET['id_cli'])){
	  						$id=$_GET["id_cli"];
	  						$clie=$pdo->query("select * from client where Id='".$id."'");
    						$cl=$clie->fetchAll(PDO::FETCH_OBJ);
						
							}
							 if(isset($_GET['cli_res'])){
	  						$id=$_GET["cli_res"];
	  						$cliee=$pdo->query("select * from client where Id='".$id."'");
    						$cl=$cliee->fetchAll(PDO::FETCH_OBJ);}
							  if(isset($_GET['ser_cli'])){
	  						$id=$_GET["ser_cli"];
	  						$cliee=$pdo->query("select * from client where Id='".$id."'");
    						$cl=$cliee->fetchAll(PDO::FETCH_OBJ);

							}
						 ?> 
		<!-- NAVBAR SECTION -->
		<div class="navbar-main" style="background-color: #fff;">
			<div class="container">
			    <nav id="navbar-example" class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.php">

						<img src="images/logo.png" alt="" />
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>

			        <div class="collapse navbar-collapse" id="">
			            <ul class="navbar-nav ml-auto">
			            	
			            	<li class="nav-item dropdown dmenu">
			                    <a class="nav-link dropdown-toggle" href="#" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						       CIN: <span style="color: red;"> <?php echo $cl[0]->Cin; ?></span>
						        </a>
			                   
			                </li>
			                <li class="nav-item dropdown dmenu">
			                    <a class="nav-link dropdown-toggle" href="#" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
						          NOM:<span style="color: red;"> <?php echo $cl[0]->Nom; ?></span>
						        </a>
			                    
			                </li>
			                <li class="nav-item dropdown dmenu">
			                    <a class="nav-link dropdown-toggle" href="#" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
						          PRENOM:<span style="color: red;"> <?php echo $cl[0]->Prenom; ?> </span>
						        </a>
			                   
			                </li>
			                 <li class="nav-item dropdown dmenu">
			                    <a class="nav-link dropdown-toggle" style="" href="index.php" role="button" aria-haspopup="true" aria-expanded="false" >
						          DECONNEXION
						        </a>
			                   
			                </li>
			                </li>
			            </ul>
			            <div class="sosmed-icon no-bg-hover float-right d-inline-flex">
							<a href="#"><i class="fa fa-facebook"></i></a> 
							<a href="#"><i class="fa fa-twitter"></i></a> 
							<a href="#"><i class="fa fa-instagram"></i></a> 
						</div>
			        </div>
			    </nav> <!-- -->

			</div>
		</div>

    </div>


    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<!-- BANNER -->
	<div class="section banner-full bgi-cover-center" data-background="images/profil.jpg">
		<div class="container h-100 d-flex align-items-center">
			
        	<div class="wrap-caption text-white">
                <h1 class="caption-heading" style=" color: #E63F64;">Les Informations et Les Reservations de <?php echo $cl[0]->Prenom; ?>
             
            
            </div>  
				
        </div>
    </div>
	


<!-- OUR ARTICLES -->
	<div class="">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center text-primary no-after mb-5" style="text-decoration: underline;color: #007bff!important;margin-top: -4%;">
							<?php echo $client->Nom; ?> <?php echo $client->Prenom; ?> 
						</h2>
						<p class="subheading text-center"></p>
					</div>
				</div>

				<div class="row">
					
					<div class="col-sm-12 col-md-12 col-lg-3">

						<div class="widget categories">
							<ul class="category-nav">
								<li class="active"><a href="info.php?id_cli=<?php echo $client->Id ?>">Informations Personnel</a></li>
								<li><a href="info.php?cli_res=<?php echo $client->Id ?>">Reservations</a></li>
								<li><a href="info.php?ser_cli=<?php echo $client->Id ?>">Services</a></li>
							</ul>
						</div>


					</div>	
					<div class="col-sm-12 col-md-12 col-lg-9">
						
						 <form action="admin/includes/actions.php" method="post">
                             <div class="panel-body">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Cin</label>
                                        <input type="text" name="cin" value="<?php echo $client->Cin; ?>" class="form-control" />
                                      </div>
                                    </div><!-- col-sm-6 -->
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Nom</label>
                                        <input type="text" name="nom" value="<?php echo $client->Nom; ?>" class="form-control" />
                                      </div>
                                    </div><!-- col-sm-6 -->
                                  </div><!-- row -->
                                  
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Prenom</label>
                                        <input type="text" name="prenom" value="<?php echo $client->Prenom; ?>" class="form-control" />
                                      </div>
                                    </div><!-- col-sm-6 -->
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Tele</label>
                                        <input type="text" name="tele" value="<?php echo $client->Tele; ?>" class="form-control" />
                                      </div>
                                    
                                    </div><!-- col-sm-6 -->
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" value="<?php echo $client->Email; ?>" name="email" class="form-control" />
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Adress</label>
                                        <input type="text" name="adress" class="form-control" value="<?php echo $client->Adress ?>" />
                                      </div>
                                    </div><!-- col-sm-6 --> 

                                  </div><!-- row -->
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Pays</label>
                                        <input type="text" name="pays" class="form-control" value="<?php echo $client->Pays; ?>" />
                                      </div>
                                    </div>
                                     <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Ville</label>
                                        <input type="text" name="ville" class="form-control" value="<?php echo $client->Ville ?>" />
                                      </div>
                                    </div>
                                  </div>

                              </div><!-- panel-body -->
                                <div class="panel-footer">
                                    <input type="hidden" name="action" value="modif_cli">
                                    <input type="hidden" name="id" value="<?php echo $client->Id ?>">
                                  <button class="btn btn-primary pull-right"><i class="glyphicon glyphicon-floppy-saved"></i> Enregistrer</button>
                                  
                                </div>
                              </div>
                            </form>
                            
                        </div><!-- panel-body -->
                          

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
	
	 <script src="admin/js/jquery-1.11.1.min.js"></script>
        <script src="admin/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="admin/js/bootstrap.min.js"></script>
        <script src="admin/js/modernizr.min.js"></script>
        <script src="admin/js/jquery.sparkline.min.js"></script>
        <script src="admin/js/toggles.min.js"></script>
        <script src="admin/js/retina.min.js"></script>
        <script src="admin/js/jquery.cookies.js"></script>


        <script src="admin/js/custom.js"></script>
</body>
</html>
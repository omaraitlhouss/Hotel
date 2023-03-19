<?php 
include "admin/includes/conx.php"; ?>


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
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>
	<!--Header-->
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
							<?php 
							  if(isset($_GET['id_cli'])){
	  						$id=$_GET["id_cli"];
	  						$clie=$pdo->query("select * from client where Id='".$id."'");
    						$cl2=$clie->fetchAll(PDO::FETCH_OBJ);
							 echo $cl2[0]->Nom; echo " "; echo $cl2[0]->Prenom; 
							}
							 if(isset($_GET['cli_res'])){
	  						$id=$_GET["cli_res"];
	  						$cliee=$pdo->query("select * from client where Id='".$id."'");
    						$cl3=$cliee->fetchAll(PDO::FETCH_OBJ);
							 echo $cl3[0]->Nom; echo " "; echo $cl3[0]->Prenom; 
							}
							 if(isset($_GET['ser_cli'])){
	  						$id=$_GET["ser_cli"];
	  						$cliets=$pdo->query("select * from client where Id='".$id."'");
    						$cl4=$cliets->fetchAll(PDO::FETCH_OBJ);
							 echo $cl4[0]->Nom; echo " "; echo $cl4[0]->Prenom; 
							}
						 ?> 
						</h2>
						<p class="subheading text-center"></p>
					</div>
				</div>

				<div class="row" style="margin-left: -11%;">


<!-- client -------------------------------------------------------------------------------------------------->

				<?php if(isset($_GET['id_cli']) ){
	  $id=$_GET["id_cli"];
    $prepareo=$pdo->query("select * from client where Id='".$id."'");
    $infos=$prepareo->fetchAll(PDO::FETCH_OBJ);
 
 ?>
					<div class="col-sm-12 col-md-12 col-lg-3">

						<div class="widget categories">
							<ul class="category-nav">
								<li class="active"><a href="info.php?id_cli=<?php echo $infos[0]->Id ?>">Informations Personnel</a></li>
								<li><a href="info.php?cli_res=<?php echo $infos[0]->Id ?>">Reservations</a>
									
								</li>
								<li><a href="info.php?ser_cli=<?php echo $infos[0]->Id ?>">Services</a></li>
							</ul>
						</div>


					</div>	
					<div class="col-sm-12 col-md-12 col-lg-9">
					
						
                              <table class="table mb30">
                               <thead>
                                  <tr>
                                  
                                    <th>Cin</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Tele</th>
                                    <th>Email</th>
                                    <th>Adress</th>
                                    <th>Pays</th>
                                    <th>Ville</th>
                                    <th>Options</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                      
                                        <td><?php echo $infos[0]->Cin; ?></td>
                                        <td><?php echo $infos[0]->Nom; ?></td>
                                        <td><?php echo $infos[0]->Prenom; ?></td>
                                        <td><?php echo $infos[0]->Tele; ?></td>
                                        <td><?php echo $infos[0]->Email; ?></td>
                                        <td><?php echo $infos[0]->Adress; ?></td>
                                        <td><?php echo $infos[0]->Pays; ?></td>
                                       	<td><?php echo $infos[0]->Ville; ?></td>
                                       	<td class="">
                                          <!--<a href="modif_cli.php?id_cli=<?php echo $client->Id; ?>"><i class="fa fa-pencil"></i></a> -->
                                         <a href="modif_cli.php?id_cli=<?php echo $infos[0]->Id; ?>"  class="fa fa-pencil"></a>
                                        </td>
                                      
                                      </tr>
                                 
                                </tbody>
                              </table>
                         


                          <div class="col-sm-12 col-md-12 col-lg-9">
						

					</div>				

				</div>
			<?php } ?>

<!-- client -------------------------------------------------------------------------------------------------->

				<?php if(isset($_GET['cli_res']) ){
	  $id=$_GET["cli_res"];
     $prepare=$pdo->query("select res.*,rc.Id_cham,ch.Nom_hotel,cl.* from reservations res inner join reservation_chambre rc on res.Num_res=rc.Num_res inner join client cl on res.Id=cl.Id inner join chambre ch on rc.Id_cham=ch.Id_cham where cl.Id='".$id."' order by res.Num_res desc");
        $reservations=$prepare->fetchAll(PDO::FETCH_OBJ);
         $prop=$pdo->query("select *from client where Id='".$id."'");
        $clien=$prop->fetchAll(PDO::FETCH_OBJ);
 
 ?>
					<div class="col-sm-12 col-md-12 col-lg-3">

						<div class="widget categories" style="width: 71%;">
							<ul class="category-nav">
								<li ><a href="info.php?id_cli=<?php echo $clien[0]->Id ?>">Informations Personnel</a></li>
								<li class="active"><a href="info.php?cli_res=<?php echo $clien[0]->Id ?>">Reservations</a>
								</li>
								<li ><a href="info.php?ser_cli=<?php echo $clien[0]->Id ?>">Services</a>
								</li>
							</ul>
						</div>


					</div>	
					<div class="col-sm-12 col-md-12 col-lg-9" style="margin-left: -9%;">
					
						
                              <table class="table mb30">
                               <thead>
                                  <tr>
                                  
                                   <th>Tarif_Total ($)</th>
                                   
                                    <th>Date_Res</th>
                                    <th>Date_Arrivé</th>
                                    <th>Date_Depart</th>
                                    <th>Nbr_Chambres</th>
                                    <th>Adultes</th>
                                    <th>Enfants</th>
                                    <th>Num_chambre</th>
                                    <th>hotel</th>
                                    <th>Num_reservations</th>
                                    <th>Options</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach ($reservations as $res): ?>
                                    <tr> 
                                        <td><?php echo $res->Tarif_total; ?></td> 
                                      
                                        <td><?php echo $res->Date_res; ?></td>
                                        <td><?php echo $res->Date_arr; ?></td>
                                        <td><?php echo $res->Date_dep; ?></td>
                                        <td><?php echo $res->Nbr_cham; ?></td>
                                        <td><?php echo $res->adultes; ?></td>
                                        <td><?php echo $res->enfants; ?></td>
                                        <td><?php echo $res->Id_cham; ?></td>
                                        <td><?php echo $res->Nom_hotel; ?></td>
                                       <td><?php echo $res->Num_res; ?></td>
                                        
                                        
                                        <td class="table-action">
                                         
                                          <a href="admin/includes/actions.php?action=sup_res_cli&num_res=<?php echo $res->Num_res; ?>&cli_res=<?php echo $res->Id ?> " class="delete-row"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                      </tr>
                                    <?php endforeach ?>
                                </tbody>
                              </table>
                         


                          <div class="col-sm-12 col-md-12 col-lg-9">
						

					</div>				

				</div>
			<?php } ?>

<!-- service -------------------------------------------------------------------------------------------------->

				<?php if(isset($_GET['ser_cli']) ){
	  $id=$_GET["ser_cli"];
  	 $prepi=$pdo->query("select rs.Id as 'id_res_ser',cl.Cin,cl.Nom,cl.Id as 'id_cl',s.Nom_ser,rs.Num_res from reservations_ser rs inner join reservations res on rs.Num_res=res.Num_res inner join client cl on res.Id=cl.Id inner join services s on rs.Id_ser=s.Id where cl.Id='".$id."' order by rs.Id desc");
        $reservations_ser=$prepi->fetchAll(PDO::FETCH_OBJ);
         $prop=$pdo->query("select *from client where Id='".$id."'");
        $clien=$prop->fetchAll(PDO::FETCH_OBJ);
 
 ?>
					<div class="col-sm-12 col-md-12 col-lg-3">

						<div class="widget categories" style="">
							<ul class="category-nav">
								<li ><a href="info.php?id_cli=<?php echo $clien[0]->Id ?>">Informations Personnel</a></li>
								<li ><a href="info.php?cli_res=<?php echo $clien[0]->Id ?>">Reservations</a>
								</li>
								<li class="active"><a href="info.php?ser_cli=<?php echo $clien[0]->Id ?>">Services</a>
								</li>
							</ul>
						</div>


					</div>	
					<div class="col-sm-12 col-md-12 col-lg-9" style="">
					
						
                              <table class="table mb30">
                               <thead>
                                  <tr>
                                  
                                   <th>Nom_services</th> 
                                    <th>Num_Reservations</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach ($reservations_ser as $rs): ?>
                                    <tr> 
                                       
                                      
                                        <td><?php echo $rs->Nom_ser; ?></td>
                                        <td><?php echo $rs->Num_res; ?></td>
                                       
                                        
                                        
                                        <td class="table-action">
                                         
                                           <a href="admin/includes/actions.php?action=sup_res_ser_cli&id=<?php echo $rs->id_res_ser; ?>&ser_cli=<?php echo $rs->id_cl ?>" class="delete-row"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                      </tr>
                                    <?php endforeach ?>
                                </tbody>
                              </table>
                         


                          <div class="col-sm-12 col-md-12 col-lg-9">
						

					</div>				

				</div>
			<?php } ?>

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
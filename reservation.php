<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OREN - RESERVATION</title>
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
	<div class="section banner-page" data-background="images/rese.jpg" style="padding-bottom: 60px;background-size: 100% 100%;">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page"></div>
			</div>
			
		</div>
	</div>

	<!-- CONTACT -->
	<div class="section" >
		<div class="content-wrap">
			<div class="container">				


				<div class="row mb-5">
					<div class="col-sm-12 col-md-12">

						<h2 class="section-heading text-primary text-center no-after mb-4" style="text-decoration: underline;">
							Vous Avez Réservez Avec Succès !!
						</h2>
						
					</div>					
				</div>

				<div class="row">
<?php 
 include "admin/includes/conx.php";

function dateDifference($date1 , $date2 , $differenceFormat = '%d' )
{
    $datetime1 = date_create($date1);
    $datetime2 = date_create($date2);
    
    $interval = date_diff($datetime1, $datetime2);
    
    return $interval->format($differenceFormat);
    
}

function recherche($cin,$rec){
foreach ($rec as $i) {
	if($i->Cin == $cin) return $i->Id;
}
return -1;
}

$pays=$_GET['pays'];
$ville=$_GET['ville'];
$hotel=$_GET['hotel'];
$id=$_GET['id']; //chambre
$datearr=$_GET['datearr'];
$datedep=$_GET['datedep'];
$nbrchambre= $_GET['nbrchambre'];
$nbradultes= $_GET['nbradultes'];
$nbrenfants= $_GET['nbrenfants'];

$cin= $_GET['cin'];
$prenom= $_GET['prenom'];
$nom= $_GET['nom'];
$telephone= $_GET['telephone'];
$email= $_GET['email'];
$adress=$_GET['adress'];
$payscli= $_GET['payscli'];
$villecli= $_GET['villecli'];

$Nbr_nuits = dateDifference($datearr,$datedep,'%d');



$rees=$pdo->query('SELECT Tarif_cham FROM chambre WHERE Id_cham="'.$id.'" ');
$res1=$rees->fetch(PDO::FETCH_OBJ);
$tarif_cham=$res1->Tarif_cham;
$prix_cham=$tarif_cham*$Nbr_nuits;
$prix=$tarif_cham*$Nbr_nuits;
$prix=$prix*$nbrchambre;

$reclient=$pdo->query('SELECT Id,Cin FROM client ');
$rec=$reclient->fetchAll(PDO::FETCH_OBJ);
$id_cli=recherche($cin,$rec);
if($id_cli==-1){
	$c1=$pdo->exec('INSERT INTO client SET Cin="'.$cin.'",Nom="'.$nom.'",Prenom="'.$prenom.'",Tele="'.$telephone.'",Email="'.$email.'",Adress="'.$adress.'",Pays="'.$payscli.'",Ville="'.$villecli.'" ');
	$reserec=$pdo->query('SELECT Id FROM client WHERE Cin="'.$cin.'"  ');
	$res4=$reserec->fetchAll(PDO::FETCH_OBJ);
	$id_cli=$res4[0]->Id;
}



$c2=$pdo->exec('INSERT INTO reservations SET Date_res="'.date('Y-m-d H:i:s').'",Date_arr="'.$datearr.'",Date_dep="'.$datedep.'",Nbr_cham="'.$nbrchambre.'",adultes="'.$nbradultes.'",enfants="'.$nbrenfants.'",Id="'.$id_cli.'" ');

$reser=$pdo->query('SELECT Num_res,Date_res FROM reservations WHERE Date_arr="'.$datearr.'" AND Date_dep="'.$datedep.'" AND Id="'.$id_cli.'"  ');
$res1=$reser->fetchAll(PDO::FETCH_OBJ);
$numres=$res1[0]->Num_res; //Num _res   <-------------
$date_res=$res1[0]->Date_res;

$c3=$pdo->exec('INSERT INTO reservation_chambre SET Id_cham="'.$id.'",Num_res="'.$numres.'" ');
$prix_ser=0;
if(isset($_POST['tab_ser'])) { 
foreach ($_POST['tab_ser'] as $Id_ser) {
        $c4=$pdo->exec('INSERT INTO reservations_ser SET Num_res="'.$numres.'",Id_ser="'.$Id_ser.'" ');
        $rese=$pdo->query('SELECT Tarif_ser FROM services WHERE Id="'.$Id_ser.'" ');

		$res2=$rese->fetch(PDO::FETCH_OBJ);
		$tarif_ser=$res2->Tarif_ser;
		$prix_ser=$prix_ser+$tarif_ser;
		$prix=$prix+$tarif_ser;
 }


}
$c11=$pdo->query('UPDATE reservations SET Tarif_total="'.$prix.'" WHERE Num_res="'.$numres.'"  ');

?>
					<div class="col-sm-12 col-md-12 col-lg-4">
						
						<div class="box-widget shadow bgi-cover-center mb-5 gradasi-primary" style="height: 91%;">
							<h3 style="text-decoration: underline;">Information de Reservations</h3>
							<ul class="list-info">
								<li>
									<div class="info-icon" style="width: 20px;">Hotel:</div>
									<div class="info-text"><?php echo $hotel; ?> </div> 
								</li>
								<li>
									<div class="info-icon">Date_Reservations:</div>
									<div class="info-text"><?php echo $date_res; ?> </div> 
								</li>
								<li>
									<div class="info-icon" style="width: 136px;">Date Arrive:</div>
									<div class="info-text"><?php echo $datearr ?></div> 
								</li>
								<li>
									<div class="info-icon" style="width: 136px;">Date Depart:</div>
									<div class="info-text"><?php echo $datedep ?></div> 
								</li>
								<li>
									<div class="info-icon" style="width: 135px;">Nombre_Nuit:</div>
									<div class="info-text"><?php echo $Nbr_nuits ?> </div> 
								</li>
								<li>
									<div class="info-icon" style="width: 135px;">Prix de Chambre:</div>
									<div class="info-text"><?php echo $prix_cham; ?>$ </div> 
								</li>
								<li>
									<div class="info-icon" style="width: 135px;">Prix de Services:</div>
									<div class="info-text"><?php echo $prix_ser; ?>$ </div> 
								</li>
							
							</ul>
						</div>

					</div>

					<div style="text-align: center;width: 388px;margin-top: 50px;">
						<i class="" style="font-size:70px;color:#ff5276;margin-top:50px; ">$<?php echo $prix ?></i> </br> </br>
						<img src="images/log.jpeg" style="">
						 </br> </br>
						 <?php $pmad=$prix*10; ?>
						<i style="font-size:70px;color:#ff5276;margin-top:50px;"><?php echo $pmad; ?> DH</i>
					</div>

					<div class="col-sm-12 col-md-12 col-lg-4" style="margin-left: -1%;">
<?php 
    include "admin/includes/conx.php";
        $prepare=$pdo->query("select * from client where Cin='".$cin."'");
        $c=$prepare->fetch(PDO::FETCH_OBJ);
         ?>			
						<div class="box-widget shadow bgi-cover-center mb-5 gradasi-primary" style="height: 91%;">
							<h3 style="text-decoration: underline;">Information de Client</h3>
							<ul class="list-info">
								<li>
									<div class="info-icon" style="width: 63px;" >Cin:</div>
									<div class="info-text"><?php echo $cin ?> </div> 
								</li>
								<li>
									<div class="info-icon" style="width: 63px;">Nom:</div>
									<div class="info-text"><?php echo $c->Nom ?> </div> 
								</li>
								<li>
									<div class="info-icon" style="width: 63px;">Prenom:</div>
									<div class="info-text"><?php echo $c->Prenom ?> </div> 
								</li>
								<li>
									<div class="info-icon" style="width: 63px;">Tele:</div>
									<div class="info-text"><?php echo $c->Tele ?></div> 
								</li>
								<li>
									<div class="info-icon" style="width: 63px;">Email:</div>
									<div class="info-text"><?php echo $c->Email ?></div> 
								</li>
								
								<li>
									<div class="info-icon" style="width: 63px;">Adress:</div>
									<div class="info-text"><?php echo $c->Adress ?></div> 
								</li>
								<li>
									<div class="info-icon" style="width: 63px;">Pays:</div>
									<div class="info-text"><?php echo $c->Pays ?></div> 
								</li>
								<li>
									<div class="info-icon" style="width: 63px;">Ville:</div>
									<div class="info-text"><?php echo $c->Ville ?></div> 
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
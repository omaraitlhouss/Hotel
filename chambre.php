<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OREN - CHAMBRES</title>
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

    <!--Tab-->
     <!-- Need to use datatables.net -->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Mini-extra style to be apply to tables with the dataTable plugin  -->
    <style>
        .dataTable table tr {
            border: solid 1px black;
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
 
 
	<!-- BANNER 1920*300 -->
	<div class="section banner-page" data-background="images/barc1.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Les Chambres</div>
			</div>
			
		</div>
	</div>
	<?php 
	 $pays= $_POST['pays'];
	 $ville= $_POST['ville'];
	 $hotel= $_POST['hotel'];
	 $nbrchambre= $_POST['nbrchambre'];
	 $nbradultes= $_POST['nbradultes'];
	 $nbrenfants= $_POST['nbrenfants'];
	 $datearr= $_POST['dateArr'];
	 $datedep= $_POST['dateDep'];
	
	?>

	
					<div class="col-sm-12 col-md-12" style="padding-top: 46px;">
						<h2 class="section-heading text-center text-primary no-after mb-5" style="text-decoration: underline;">
							NOTRE CHAMBRES AU <?php echo $hotel; ?>
						</h2>
					</div>
			

	<!-- Chambre  -->
	<div class="section bg-gray-light" style="background-color: #fff">
		<div class="content-wrap">
			
			<div class="container" style="margin-top: -95px;">
				
				 <div class="row" style="width: 100%">
    				<table id="myTable" style="">
       				 <thead style="background-color: #313131;color: #fff;">
            			<tr>
			                <th ></th>
			                <th>Informations</th>
			                <th>Prix ($)</th>
           				</tr>
        			</thead>
       				<tbody>
 <?php 
  include "admin/includes/conx.php";
  $res=$pdo->query('SELECT * FROM chambre WHERE Nom_hotel="'.$hotel.'" AND Id_cham not in (SELECT c.Id_cham from reservation_chambre c inner join reservations r on c.Num_res=r.Num_res where ("'.$datearr.'" between r.Date_arr and r.Date_dep) or ("'.$datedep.'" between r.Date_arr and r.Date_dep) or ("'.$datearr.'" <r.Date_arr and "'.$datedep.'" >r.Date_dep) ) order by Tarif_cham desc '); 
  $chambres=$res->fetchAll(PDO::FETCH_OBJ);
  $i=1; ?>
 <?php foreach ($chambres as $c) { ?>
            			<tr role="row" class="odd">
			                <td class="" style="">
			                	<div class="col-sm-12 col-md-12 col-lg-25">
									<img src="images/<?php echo $c->photo ?>.jpg" alt="" class="shadow img-fluid">
								</div>	
							</td>
							<td style="padding-left: 4px;width: 374px;" class="sorting_1">
								<div class="col-sm-12 col-md-12 col-lg-10" style="padding-left: 0px;">
									<h2 class="section-heading text-primary no-after mb-5" style="text-decoration: underline;">Chambre <?php echo $i; $i++; ?></h2>
									<p class="subheading mb-4"><em></em></p><h3><em><?php echo $c->Tele ?></em></h3><p></p>
									<p>Etage :<?php echo $c->Etage;?></br>Nbr Lits :<?php echo $c->Nbr_lits; ?></br>Nom_categorie :<?php echo $c->Nom_catg; ?></p>
									<div class="spacer-10"></div>
									</div></td>
								
							<td class="" style="padding-left: 0px;">
								<a href="client.php?id=<?php echo $c->Id_cham; ?>&pays=<?php echo $pays ?>&ville=<?php echo $ville ?>&hotel=<?php echo $hotel ?>&nbrchambre=<?php echo $nbrchambre ?>&nbradultes=<?php echo $nbradultes ?>&nbrenfants=<?php echo $nbrenfants ?>&datearr=<?php echo $datearr ?>&datedep=<?php echo $datedep ?> " class="btn btn-primary">Reserver <?php echo $c->Tarif_cham; ?>$</a>
							</td>
			            </tr>
			       <?php } ?>     
        			</tbody>
    				</table>
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
	<!--Tab-->
	<!-- Need to use datatables.net -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function(){
    
    //Apply the datatables plugin to your table
    $('#myTable').DataTable();
    
});
</script>
</body>
</html>
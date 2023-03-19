<!--hotel-->

<?php 
	
	if (isset($_POST['action'])) {
	include "conx.php";
			if ($_POST['action']=="ajout_hotel") {
			
			/*
			
			$result=$stmt->fetchAll();

			var_dump($result);
			die;*/
			$name=$_POST["nom_hotel"];
			$adress=$_POST["adress"];
			$tele=$_POST["tele"];
			$paye=$_POST["pays"];
			$ville=$_POST["ville"];
			$desc=$_POST["desc"];
			$photo=$_POST["photo"];
			$stmt = $pdo->exec('INSERT INTO hotel values("'.$name.'","'.$desc.'","'.$adress.'","'.$tele.'","'.$paye.'","'.$ville.'","'.$photo.'")');
			header("location:http://localhost/hotel/admin/hotels.php");
			die;
		}else if ($_POST['action']=="modif_hotel") {
			$name=$_POST["nom_hotel"];
			$adress=$_POST["adress"];
			$tele=$_POST["tele"];
			$paye=$_POST["pays"];
			$ville=$_POST["ville"];
			$desc=$_POST["desc"];
			$photo=$_POST["photo"];
			$prepare = $pdo->exec('UPDATE hotel set Desc_hotel="'.$desc.'",Adress="'.$adress.'",Tele="'.$tele.'",Pays="'.$paye.'",Ville="'.$ville.'",photo="'.$photo.'" WHERE Nom_hotel="'.$name.'" ');
			
			header("location:http://localhost/hotel/admin/hotels.php");
			die;
		};
	}elseif (isset($_GET['action'])) {
		if ($_GET['action']=="sup_hotel") {
			include "conx.php";
			$n=$_GET["Nom_hotel"];
				$c=$pdo->exec('DELETE from hotel WHERE Nom_hotel="'.$n.'" ');
				header("location:http://localhost/hotel/admin/hotels.php");
				die;
		};
	};
 ?>

 <!--chambre-->

 <?php 
	
	if (isset($_POST['action'])) {
		include "conx.php";


		if ($_POST['action']=="ajout_chambre") {
			
			$tele=$_POST["telephone_chambre"];
			$hotel=$_POST["hotel"];
			$tarif=$_POST["tarif"];
			$photo=$_POST["photo"];
			$nbr_lits=$_POST["Nbr-Lits"];
			$etage=$_POST["etage_chambre"];
			$type=$_POST["type_chambre"];

			$stmt =$pdo->exec('INSERT INTO chambre(Tele,Etage,Nbr_lits,Tarif_cham,Nom_catg,photo,Nom_hotel) values("'.$tele.'","'.$etage.'","'.$nbr_lits.'","'.$tarif.'","'.$type.'","'.$photo.'","'.$hotel.'") ');
			
			header("location:http://localhost/hotel/admin/chambres.php");
			die;
		}elseif ($_POST['action']=="modif_chambre") {
			//var_dump($_POST);
			$tele=$_POST["telephone_chambre"];
			$hotel=$_POST["hotel"];
			$tarif=$_POST["tarif"];
			$photo=$_POST["photo"];
			$nbr_lits=$_POST["Nbr-Lits"];
			$etage=$_POST["etage_chambre"];
			$type=$_POST["type_chambre"];
			$id=$_POST["Id_cham"];

			$p=$pdo->exec('UPDATE chambre set Tele="'.$tele.'",Etage="'.$etage.'",Nbr_lits="'.$nbr_lits.'",Tarif_cham="'.$tarif.'",Nom_catg="'.$type.'",photo="'.$photo.'" WHERE Id_cham="'.$id.'" ');
			
			header("location:http://localhost/hotel/admin/chambres.php");
			die;
		}
	}elseif (isset($_GET['action'])) {
		if ($_GET['action']=="sup_chambre") {
			include "conx.php";
			$id=$_GET["id_cham"];
				$prepare=$pdo->exec('DELETE FROM chambre where Id_cham="'.$id.'" ');
				header("location:http://localhost/hotel/admin/chambres.php");
				die;
		};
	};
 ?>

<!--service-->
 <?php 
	
	if (isset($_POST['action'])) {
		include "conx.php";


		if ($_POST['action']=="ajout_service") {
			
			/*
			
			$result=$stmt->fetchAll();

			var_dump($result);
			die;*/
			$nom=$_POST["nom"];
			$description=$_POST["description"];
			$tarif=$_POST["tarif"];
			$photo=$_POST["photo"];
		
			$stmt = $pdo->exec('INSERT INTO services(Nom_ser,Desc_ser,Tarif_ser,photo) values("'.$nom.'","'.$description.'","'.$tarif.'","'.$photo.'") ');
			//rederection vers la 1 page
			header("location:http://localhost/hotel/admin/services.php");
			die;
		}elseif ($_POST['action']=="modif_services") {
		
			$nom=$_POST["nom"];
			$description=$_POST["description"];
			$tarif=$_POST["tarif"];
			$photo=$_POST["photo"];
			$prepare = $pdo->exec('UPDATE services set Desc_ser="'.$description.'",Tarif_ser="'.$tarif.'",photo="'.$photo.'" where Nom_ser="'.$nom.'" ');
			header("location:http://localhost/hotel/admin/services.php");
			die;
		}
	}elseif (isset($_GET['action'])) {
		if ($_GET['action']=="sup_service") {
			include "conx.php";
			$nom=$_GET["nom"];
				$prepare=$pdo->exec('DELETE from services where Nom_ser="'.$nom.'" ');
				header("location:http://localhost/hotel/admin/services.php");
				die;
		};
	};
?>
 <!--Contact-->
 <?php 
	
	if (isset($_POST['action'])) {
		include "conx.php";
		if ($_POST['action']=="contact") {
			
			$fullnom=$_POST["fullnom"];
			$adress=$_POST["adress"];
			$subject=$_POST["subject"];
			$tele=$_POST["tele"];
			$mesage=$_POST["mesage"];
		
			$st = $pdo->exec('INSERT INTO contact SET Full_name="'.$fullnom.'",Adress="'.$adress.'",Subject="'.$subject.'",Tele="'.$tele.'",Message="'.$mesage.'" ');
			
			header("location:http://localhost/hotel/contact.php?msg=Votre Message Est Envoyé !!!");
			die;
		}
	}
	elseif (isset($_GET['action'])){
		include "conx.php";
		if($_GET['action']=="sup_contact"){
			$id=$_GET["id"];
			$sta = $pdo->exec('DELETE FROM contact WHERE Id="'.$id.'" ');
			header("location:http://localhost/hotel/admin/contact.php");

			die;
		};
	};
	?>
<!--Client-->
<?php 
if(isset($_GET['action'])){
include "conx.php";
if($_GET['action']=="sup_client"){
			$id=$_GET["id"];
			$staa = $pdo->exec('DELETE FROM client WHERE Id="'.$id.'" ');
			header("location:http://localhost/hotel/admin/client.php");
			die;
		};
}

 ?>

 

 <!--Reservations  b--> 
<?php 
if(isset($_GET['action'])){
include "conx.php";
if($_GET['action']=="sup_res"){
			$num_res=$_GET["num_res"];
			$staa = $pdo->exec('DELETE FROM reservation_chambre WHERE Num_res="'.$num_res.'" ');
			$stdrgga = $pdo->exec('DELETE FROM reservations_ser WHERE Num_res="'.$num_res.'" ');
			$sta = $pdo->exec('DELETE FROM reservations WHERE Num_res="'.$num_res.'" ');
		
			header("location:http://localhost/hotel/admin/reservations.php");
			die;
		};
}

 ?>


<!--Reservations_services-->
<?php 
if(isset($_GET['action'])){
include "conx.php";
if($_GET['action']=="sup_res_ser"){
			$id=$_GET["id"];
			$stdrgga = $pdo->exec('DELETE FROM reservations_ser WHERE Id="'.$id.'" ');
			header("location:http://localhost/hotel/admin/reservations_ser.php");
			die;
		};
}
?>

<!--Reservations_services_cli-->
<?php 
if(isset($_GET['action'])){
include "conx.php";
if($_GET['action']=="sup_res_ser_cli"){
			$id=$_GET["id"];
			$id_cli=$_GET["ser_cli"];
			$stdrgga = $pdo->exec('DELETE FROM reservations_ser WHERE Id="'.$id.'" ');
			header("location:http://localhost/hotel/info.php?ser_cli=".$id_cli."");
			die;
		};
}
?>

<!--Login-->
<?php 
if (isset($_POST['action'])) {
		
		if ($_POST['action']=="login") {
			
			$username=$_POST['username'];
			$pass=$_POST['pass'];
			if($username=="Oussama" && $pass=="123456789"){
				header("location:http://localhost/hotel/admin/index.php");
				die;
			}
			else{
				header("location:http://localhost/hotel/admin/login.php?msg=Les Informations est incorrect");
				die;
			}	
			
		}
	}
?>

<!--Forget-->
<?php 
if (isset($_POST['action'])) {
		
		if ($_POST['action']=="forget") {
		
			$daten=$_POST['daten'];
			
			if($daten=="22/09/1998" ){
				header("location:http://localhost/hotel/admin/forget.php?pass=123456789");
				die;
			}
			else{
				header("location:http://localhost/hotel/admin/forget.php?msg=Date Naissance est incorrect");
				die;
			}	
			
		}
	}
?>

<!--Modif client -->
<?php
if(isset($_POST['action'])){
if($_POST['action']=="modif_cli") {
			$id=$_POST["id"];
			$cin=$_POST["cin"];
			$nom=$_POST["nom"];
			$prenom=$_POST["prenom"];
			$tele=$_POST["tele"];
			$email=$_POST["email"];
			$adress=$_POST["adress"];
			$pays=$_POST["pays"];
			$ville=$_POST["ville"];
			$prepare = $pdo->exec('UPDATE client set cin="'.$cin.'",Nom="'.$nom.'",Prenom="'.$prenom.'",Tele="'.$tele.'",Email="'.$email.'",Adress="'.$adress.'",Pays="'.$pays.'",Ville="'.$ville.'" WHERE Id="'.$id.'" ');
			
			header("location:http://localhost/hotel/info.php?id_cli=".$id." ");
			die;
		}
		} ?>

	<!--Reservations cli--> 
<?php 
if(isset($_GET['action'])){
include "conx.php";
if($_GET['action']=="sup_res_cli"){
			$num_res=$_GET["num_res"];
			$id=$_GET["cli_res"];
			$staa = $pdo->exec('DELETE FROM reservation_chambre WHERE Num_res="'.$num_res.'" ');
			$stdrgga = $pdo->exec('DELETE FROM reservations_ser WHERE Num_res="'.$num_res.'" ');
			$sta = $pdo->exec('DELETE FROM reservations WHERE Num_res="'.$num_res.'" ');
		
			header("location:http://localhost/hotel/info.php?cli_res=".$id."");
			die;
		}
}

 ?>
<!---------Connecter------->
<?php 
if (isset($_POST['action'])) {
		
		if ($_POST['action']=="connecter") {
			function recherche($cin,$rec){
			foreach ($rec as $i) {
			if($i->Cin == $cin) return $i->Id;
				}
			return -1;
			}
			
			$rech=$pdo->query("select * from client");
    		$tab=$rech->fetchAll(PDO::FETCH_OBJ);
			$cin=recherche($_POST['cin'],$tab);

			
			if($cin==-1 ){
				header("location:http://localhost/hotel/connecter.php?msg=Cin Incorrecte");
				die;
			}
			else{
				header("location:http://localhost/hotel/info.php?id_cli=".$cin."");
				die;
			}	
			
		}
	}
?>


 
<?php 
 include "admin/includes/conx.php";
  $prepare=$pdo->query("select distinct Pays from hotel");
  $hotels=$prepare->fetchAll(PDO::FETCH_OBJ);
  /*$prep=$pdo->query("select Ville from hotel where Pays='Maroc' ");
  $villes=$prep->fetchAll(PDO::FETCH_OBJ);
  $pr=$pdo->query("select Nom_hotel from hotel where Ville='Agadir'");
  $ht=$pr->fetch(PDO::FETCH_OBJ);
  */
  ?>
<link rel="stylesheet" type="text/css" href="formu.css">
<style type="text/css">
	#inputState{
			width:10%;
			display: inline;
			margin-top: 15px;
		}
</style>
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
<!--Formulaire Reserver-->
	<div style="background-color: #313131;padding-top: 32px;color: #fff;">
	<div class="container">
		<div class="footer-title" style="color: #E63F64;text-align: center;margin-top: -16px;font-size: 24px;font-weight: 700;border-bottom: double;">
								RÉSERVEZ VOTRE HÔTEL
							</div>
		<form  action="chambre.php" method="POST">
		
			
		<div class="form-group">
	      	<label for="inputState">Pays : </label>
	      	<select id="inputState" class="form-control" name="pays" onclick="m(pays.value)" style="width: 17%;">
	      		<?php foreach ($hotels as $hotel) { ?>
	      			<option ><?php echo $hotel->Pays; ?></option>
	      		<?php } ?>
	      <!--  
	        <option>France</option>
	        <option>Spain</option>
	        <option>Algerie</option>
	        <option>Germany</option>
	        <option>Italy</option>-->
	      
	      </select>
	  </div>
	<div class="form-group">
	      <label for="inputState">Ville : </label>
	      <select id="inputState" class="form-control" name="ville" onclick="b(ville.value)" style="width: 26%;" id="ville"> 
	         <option selected>TANGER</option>
	        <option >MARRAKECH</option>
	        <option >RABAT</option>
	        <option >AGADIR</option>
	        <option >FES</option>
	        <option >IFRANE</option>
	      </select>
	  </div>
	 <div class="form-group" style="margin-left: 15px;">
	      <label for="inputState" id="lblhotel">hotel : </label>
	      <select id="inputState" class="form-control" id="hotel" name="hotel" style="width: 35%;">
	            <option selected>OHen HOTEL TANGER CITY CENTER</option>
	       
	      </select>
	  </div>
	<div class="form-group" id="divcham" style="margin-left: -10px">
	      <label for="inputState">Chambres : </label>
	      <select id="inputState" id="cham" class="form-control" name="nbrchambre" style="width: 158px;">
	        <option selected>1</option>
	        <option>2</option>
	        <option>3</option>
	        <option>4</option>
	      </select>
	  </div>

	  <div class="form-group" id="divadulte" style="margin-left: 13px;">  
	      <label for="inputState" id="lbladulte">Adultes : </label>
	      <select id="inputState" class="form-control" name="nbradultes" id="adulte" style="width: 253px;">
	        <option selected>1</option>
	        <option>2</option>
	        <option>3</option>
	       
	      </select>
	  </div>
	  <div class="form-group">
	      <label for="inputState">Enfants : </label>
	      <select id="inputState" class="form-control" name="nbrenfants" id="enfants" style="width: 138px;">
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
    	<label style="margin-left: -67px;" id="lblar">Date d'arrivé : </label>
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
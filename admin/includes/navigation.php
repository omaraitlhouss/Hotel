
<?php 
    include "includes/conx.php";
        $prepare=$pdo->query("select count(*) as 'nbr' from hotel");
        $hotels=$prepare->fetch(PDO::FETCH_OBJ);
        ?>
        <?php  $prep=$pdo->query("select count(*) as 'nbr_cli' from client");
        $client=$prep->fetch(PDO::FETCH_OBJ); ?>

       <?php 

       $prepar=$pdo->query("select count(*) as 'nbr_cham' from chambre");
        $chambre=$prepar->fetch(PDO::FETCH_OBJ); ?>
         <?php 

       $p=$pdo->query("select count(*) as 'nbr_contact' from contact");
        $contact=$p->fetch(PDO::FETCH_OBJ); ?>
        
         
<div class="leftpanel">

	<div class="logopanel">
		
	<img src="images/photos/logo.png">
	</div>   
		<div class="leftpanelinner">

					<!-- This is only visible to small devices -->
					<div class="visible-xs hidden-sm hidden-md hidden-lg">   
						<div class="media userlogged">
							<img alt="" src="images/photos/loggeduser.png" class="media-object">
							<div class="media-body">
								<h4>John Doe</h4>
								<span>"Life is so..."</span>
							</div>
						</div>

						<h5 class="sidebartitle actitle">Account</h5>
						<ul class="nav nav-pills nav-stacked nav-bracket mb30">
							<li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
							<li><a href=""><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
							<li><a href=""><i class="fa fa-building-o"></i> <span>Help</span></a></li>
							<li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
						</ul>
					</div>

					<h5 class="sidebartitle">Navigation</h5>
					<ul class="nav nav-pills nav-stacked nav-bracket">
						<li><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
						<li><a href="hotels.php"><i class="fa fa-building-o"></i> <span>List Hotels</span></a></li>
						<li><a href="chambres.php"><i class="fa fa-building-o"></i> <span>List Chambres</span></a></li>
						<li><a href="services.php"><i class="fa fa-building-o"></i> <span>List Services</span></a></li>
						<li><a href="client.php"><i class="fa fa-building-o"></i> <span>List Clients</span></a></li>
						<li><a href="reservations.php"><i class="fa fa-building-o"></i> <span>List Reservations</span></a></li>
						
						
						<li><a href="reservations_ser.php"><i class="fa fa-building-o"></i> <span>List Reservations_Services</span></a></li>
					<li><a href="contact.php"><i class="fa fa-building-o"></i> <span>List Contact</span></a></li>
					</ul>
					<h5 class="sidebartitle">Les Informations</h5>
					<ul style="color: #d0bfb3;">
						<li><span>Nombre d'hotels : <?php echo $hotels->nbr; ?></span></li>
						<li><span>Nombre de Clients :<?php echo $client->nbr_cli; ?></span></li>
						<li><span>Nombre de Chambres :<?php echo $chambre->nbr_cham; ?></span></li>
						<li><span>Nombre de Contacts :<?php echo $contact->nbr_contact; ?></span></li>
					</ul>
					

					

				</div><!-- leftpanelinner -->
			</div><!-- leftpanelinner -->
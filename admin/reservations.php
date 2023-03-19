<?php 
    include "includes/conx.php";
        $prepare=$pdo->query("select res.*,rc.Id_cham,ch.Nom_hotel,cl.* from reservations res inner join reservation_chambre rc on res.Num_res=rc.Num_res inner join client cl on res.Id=cl.Id inner join chambre ch on rc.Id_cham=ch.Id_cham  order by res.Num_res desc");
        $reservations=$prepare->fetchAll(PDO::FETCH_OBJ);
         ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">

        <title>Admin Reservations</title>

        <link href="css/style.default.css" rel="stylesheet">
        <style type="text/css">
            .clear{clear: both};
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>
        <section>
            <?php include  "includes/navigation.php"; ?>

            <div class="mainpanel" style="width: 126%;">

             

                <div class="pageheader">
                    <h2><i class="fa fa-building-o"></i> Reservations</h2>
                     <div class="breadcrumb-wrapper">
                        <span class="label">:</span>
                        <ol class="breadcrumb">
                            <li class="active" style="font-size: 20px;">Oussama / Hanane</li>
                            <li><a href="login.php" style="font-size: 20px;">Deconnexion</a></li>
                        </ol>
                    </div>
                </div>

                <div class="contentpanel">
                    <div class="panel panel-default col-md-12">
                        <div class="panel-body panel-body-nopadding">
                            <br>
                            
                           
                            <div class="clear"></div>
                            <br>
                            <div class="table-responsive col-md-12">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>Tarif_Total ($)</th>
                                    <th>Cin</th>
                                    <th>Nom_client</th>
                                    <th>Date_Res</th>
                                    <th>Date_Arrivé</th>
                                    <th>Date_Depart</th>
                                    <th>Nbr_Chambres</th>
                                    <th>Nbr_Adultes</th>
                                    <th>Nbr_enfants</th>
                                    <th>Id_chambre</th>
                                    <th>hotel</th>
                                    <th>Num_reservations</th>
                                  

                                  </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($reservations as $res): ?>
                                    <tr> 
                                        <td><?php echo $res->Tarif_total; ?></td> 
                                        <td><?php echo $res->Cin; ?></td>
                                        <td><?php echo $res->Nom; ?></td>
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
                                         
                                          <a href="includes/actions.php?action=sup_res&num_res=<?php echo $res->Num_res; ?>" class="delete-row"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                      </tr>
                                    <?php endforeach ?>
                                </tbody>
                              </table>
                          
                            </div><!-- panel-body -->
                        </div><!-- panel-body -->
        
                    </div><!-- panel -->
                </div>

            </div><!-- mainpanel -->

            <?php include "includes/right-nav.php" ?>

        </section>



        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/jquery.sparkline.min.js"></script>
        <script src="js/toggles.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/jquery.cookies.js"></script>


        <script src="js/custom.js"></script>

    </body>
</html>

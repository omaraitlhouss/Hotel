<?php 
    include "includes/conx.php";
        $prepare=$pdo->query("SELECT * FROM hotel");
        $Hotels=$prepare->fetchAll(PDO::FETCH_OBJ);
         ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">

        <title>Admin Hotels</title>

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

            <div class="mainpanel">

             

                <div class="pageheader">
                    <h2><i class="fa fa-building-o"></i> Hotels</h2>
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
                            
                            <div class="pull-right">
                                <a href="ajout_hotel.php" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-ok-circle"></i> Nouvau Hotel</a>
                            </div>
                            <div class="clear"></div>
                            <br>
                            <div class="table-responsive col-md-12">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>Nom Hotel</th>
                                    <th>Description</th>
                                    <th>Adress</th>
                                    <th>Tele</th>
                                    <th>Pays</th>
                                    <th>Ville</th>
                                    <th>photo</th>
                                    <th>Options</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Hotels as $hotel): ?>
                                    <tr>
                                        <td><?php echo $hotel->Nom_hotel; ?></td>
                                        <td><?php echo $hotel->Desc_hotel; ?></td>
                                        <td><?php echo $hotel->Adress; ?></td>
                                        <td><?php echo $hotel->Tele; ?></td>
                                        <td><?php echo $hotel->Pays; ?></td>
                                        <td><?php echo $hotel->Ville; ?></td>
                                        <td><?php echo $hotel->photo; ?></td>
                                        <td class="table-action">
                                          <a href="modif_hotel.php?Nom_hotel=<?php echo $hotel->Nom_hotel; ?>"><i class="fa fa-pencil"></i></a>
                                          <a href="includes/actions.php?action=sup_hotel&Nom_hotel=<?php echo $hotel->Nom_hotel; ?>" class="delete-row"><i class="fa fa-trash-o"></i></a>
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

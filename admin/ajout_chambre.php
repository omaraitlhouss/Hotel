<?php 
    include "includes/conx.php";

   

$prepare=$pdo->query("SELECT * FROM hotel");
        $Hotels=$prepare->fetchAll(PDO::FETCH_OBJ);

        $prepare=$pdo->query("SELECT * FROM categorie");
        $categories=$prepare->fetchAll(PDO::FETCH_OBJ);
 ?>  
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">

        <title>Admin Chambre</title>

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
                    <h2><i class="fa fa-building-o"></i> Chambres</h2>
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
                            <form action="includes/actions.php" method="post">
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                  <div class="panel-btns">
                                    <a href="" class="panel-close">&times;</a>
                                    <a href="" class="minimize">&minus;</a>
                                  </div>
                                  <h4 class="pael-title">Nouveau Chambre</h4>
                                </div>
                                <div class="panel-body">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Telephone Chambre</label>
                                        <input type="text" name="telephone_chambre"  class="form-control" />
                                      </div>
                                    </div><!-- col-sm-6 -->
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Etage Chambre</label>
                                        <input type="text" name="etage_chambre"  class="form-control" />
                                      </div>
                                    </div>
                                  </div><!-- row -->
                                  
                                  <div class="row">
                                    
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Type Chambre</label>
                                        <select class="form-control" name="type_chambre">
                                       
                                           <?php foreach ($categories as $c) {  
                                             $catg=$c->nom_catg;?>
                                            <option><?php echo $catg; ?></option>
                                           <?php } ?>
                                       
                                        </select>
                                      </div>

                                    </div><!-- col-sm-6 -->
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Tarif</label>
                                        <input type="text" name="tarif"  class="form-control" />
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Photo</label>
                                        <input type="text" name="photo"  class="form-control" />
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Hotel</label>
                                        <select class="form-control" name="hotel">
                                         
                                           <?php foreach ($Hotels as $h) { ?>
                                            <?php $hotel=$h->Nom_hotel; ?>
                                            <option><?php echo $hotel; ?></option>
                                           <?php } ?>
                                        </select>
                                       
                                      </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Nbr-Lits</label>
                                        <input type="text" name="Nbr-Lits"  class="form-control" />
                                      </div>
                                    </div>
                                </div>
                                 
                                   </div><!-- panel-body -->
                                <div class="panel-footer">
                                    <input type="hidden" name="action" value="ajout_chambre" >
                                  <button class="btn btn-primary pull-right"><i class="glyphicon glyphicon-floppy-saved"></i> Enregistrer</button>
                                </div>
                              </div>
                            </form>
                            
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

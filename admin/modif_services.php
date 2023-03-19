<?php 
    include "includes/conx.php";

    $nom_ser=$_GET["nom"];
    $prepare=$pdo->query("select * from services where Nom_ser='".$nom_ser."'");
    $services=$prepare->fetchAll(PDO::FETCH_OBJ);
    $service=$services[0];
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">

        <title>Admin Services</title>

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
                    <h2><i class="fa fa-building-o"></i>Services</h2>
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
                                  <h4 class="panel-title">Modifier Services</h4>
                                </div>
                                <div class="panel-body">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Nom Services</label>
                                        <input type="text" name="nom" value="<?php echo $service->Nom_ser; ?>" class="form-control" />
                                      </div>
                                    </div><!-- col-sm-6 -->
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Description Services</label>
                                        <input type="text" name="description" value="<?php echo $service->Desc_ser; ?>" class="form-control" />
                                      </div>
                                    </div><!-- col-sm-6 -->
                                  </div><!-- row -->
                                  
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Tarif</label>
                                        <input type="text" name="tarif" value="<?php echo $service->Tarif_ser; ?>" class="form-control" />
                                      </div>
                                    </div><!-- col-sm-6 -->
                                   
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Photo</label>
                                        <input type="text" name="photo" value="<?php echo $service->photo; ?>" class="form-control" />
                                      </div>
                                    </div><!-- col-sm-6 -->
                                   
                                  </div><!-- row -->
                              </div><!-- panel-body -->
                                <div class="panel-footer">
                                    <input type="hidden" name="action" value="modif_services">
                                    <input type="hidden" name="id" value="<?php echo $_GET['nom'] ?>">
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

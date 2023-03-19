<?php 
    include "includes/conx.php";

    $Num_res=$_GET["num_res"];
    $prepare=$pdo->query("select * from reservations where Num_res='".$Num_res."'");
    $reservations=$prepare->fetchAll(PDO::FETCH_OBJ);
    $res=$reservations[0];
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

            <div class="mainpanel">

               <?php include "includes/header-top.php" ?>

                <div class="pageheader">
                    <h2><i class="fa fa-building-o"></i> List Reservations</h2>
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
                                  <h4 class="panel-title">Modifier Reservations</h4>
                                </div>
                                <div class="panel-body">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Date_res</label>
                                        <input type="date" name="date_res" value="<?php echo $res->Date_res; ?>" class="form-control" />
                                      </div>
                                    </div><!-- col-sm-6 -->
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Date_Arrive</label>
                                        <input type="date" name="date_arr" value="<?php echo $res->Date_arr; ?>" class="form-control" />
                                      </div>
                                    </div><!-- col-sm-6 -->
                                  </div><!-- row -->
                                  
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Date_Depart</label>
                                        <input type="date" name="date_dep" value="<?php echo $res->Date_dep; ?>" class="form-control" />
                                      </div>
                                    </div><!-- col-sm-6 -->
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Nbr_nuit</label>
                                        <input type="text" name="Nbr_nuit" value="<?php echo $res->Nbr_nuit; ?>" class="form-control" />
                                      </div>
                                      <!-- <select class="form-control mb15">
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                            </select> -->
                                    </div><!-- col-sm-6 -->
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="control-label">Cin</label>
                                        <input type="text" value="<?php echo $res->Cin; ?>" name="cin" class="form-control" />
                                      </div>
                                    </div>
                                  </div>
                                    
                                <!-- row -->
                                  
                              </div><!-- panel-body -->
                                <div class="panel-footer">
                                    <input type="hidden" name="action" value="modif_res">
                                    <input type="hidden" name="id" value="<?php echo $_GET['num_res'] ?>">
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

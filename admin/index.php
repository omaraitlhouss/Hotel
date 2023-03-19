<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">

        <title>Admin</title>

        <link href="css/style.default.css" rel="stylesheet">

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

            <div class="mainpanel" >


                <div class="pageheader">
                    <h2><i class="fa fa-home"></i> Site D'Hotel </h2>
                    <div class="breadcrumb-wrapper">
                        <span class="label">:</span>
                        <ol class="breadcrumb">
                            <li class="active" style="font-size: 20px;">Oussama / Hanane</li>
                            <li><a href="login.php" style="font-size: 20px;">Deconnexion</a></li>
                        </ol>
                    </div>
                </div>

                <div class="contentpanel" style="background-image: url('images/mn.jpg');background-size: 100% 100%;height: 1000px;">
                    <div style="position: relative;width: 38%;height: 73%;margin: 100px auto;">
                        <div style="background-color: #fff;opacity: 0.5;position: absolute;width: 93%;height: 49%;">
                            
                        </div>
                   <div style="margin: 200px auto;height: 47%;margin-top: 18px;margin-left: 34px;position: absolute;width: 89%;text-align: center;"></br></br></br>
                       <img src="images/logo.png"> </br></br></br>
                      <a class="btn btn-primary" href="http://localhost/hotel/index.php" style="width: 60%;margin-left: -63px;background-color: #1d2939;">Oren</a>
                   </div> 

                   </div>
                   
                   
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

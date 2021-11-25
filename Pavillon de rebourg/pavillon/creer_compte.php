
<?php 




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creer Compte</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="fonts/raleway/raleway.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css">
    <link href="fonts/playfair-display/playfair-display.css" rel="stylesheet">
    <link rel="stylesheet" href="plugin/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugin/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker3.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link href="css/lightgallery.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="css/semantic.css">
    <link rel="stylesheet" href="css/paraxify.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body class="">

<?php

session_start();




    ?>
<!--load page-->
<div class="load-page">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>

<!-- Mobile nav -->
<?php include('include/mobile_nav.php');?>

<!-- End mobile menu -->

<div id="wrapper-container" class="site-wrapper-container">
    <div class="vk-room-details">

        <!--HEADER-->
        <?php include('include/header.php');?>

        <!--ENAD HEADER-->

        <!--BENGIN CONTENT HEADER-->
        <section class="site-content-area">
            <div class="vk-gallery-grid-full-banner">
                <div class="vk-about-banner">
                    <div class="vk-about-banner-destop">
                        <div class="vk-banner-img"></div>
                        <div class="vk-about-banner-caption">
                            <h2>Creer Un Compte</h2>
                            <h3>
                                <a href="#"></a>
                                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <a href="#"></a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>


         
                        




                        <div class="col-md-4">
                            <div class="vk-room-details-content-right">
                                <h3>Creer Un Compte</h3>
                                <form action="controller/AjoutClient.php" method="post" class="form-horizontal">
                                    <div class="form-group"> <!-- Date input -->
                                        <div class="col-md-12">
                                            <label class="control-label">Email</label>
                                            <input class="form-control" type="email" required placeholder="Email" name="email_client">
                                                
                                           
                                        </div>
                                    </div>

                                    <div class="form-group"> <!-- Date input -->
                                        <div class="col-md-12">
                                            <label class="control-label">Mot De Passe</label>
                                            
											<input class="form-control" type="password" required  placeholder="Password" name="motdepasse_client">
                                        </div>
                                    </div>

                                    <div class="form-group"> <!-- Date input -->
                                        <div class="col-md-12">
                                            <label class="control-label">Nom</label>
                                            <input class="form-control" type="text" required placeholder="Nom" name="nom_client">
                                                
                                           
                                        </div>
                                    </div>

                                    <div class="form-group"> <!-- Date input -->
                                        <div class="col-md-12">
                                            <label class="control-label">PreNom</label>
                                            <input class="form-control" type="text" required placeholder="PreNom" name="prenom_client">
                                                
                                           
                                        </div>
                                    </div>
                                    <div class="form-group"> <!-- Date input -->
                                        <div class="col-md-12">
                                            <label class="control-label">Tél</label>
                                            <input class="form-control" type="text" required placeholder="Tél" name="tel_client">
                                                
                                           
                                        </div>
                                    </div>
                                    <div class="form-group"> <!-- Date input -->
                                        <div class="col-md-12">
                                            <label class="control-label">Adresse</label>
                                            <input class="form-control" type="text" required placeholder="Adresse" name="adresse_client">
                                                
                                           
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-12">
                                        
                                        <div class="vk-btn-send">
                                        <div class="vk-dark-our-room-item-book-right">

                                        <input type="Submit" name="Submit" value="Creer Un Compte">
                                       
                                                </div>
  
                                          
                                            </div>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>












        </section>
        <!--END CONTENT ABOUT-->

        <!--FOOTER-->
        <?php include('include/footer.php'); ?>
        <!--END FOOTER-->

    </div>

</div>
<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery1.min.js"></script>
<script src="plugin/dist/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.js"></script>
<script src="js/number-count/jquery.counterup.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.tr.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script src="js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script src="js/picturefill.min.js"></script>
<script src="js/lightgallery.js"></script>
<script src="js/lg-pager.js"></script>
<script src="js/lg-autoplay.js"></script>
<script src="js/lg-fullscreen.js"></script>
<script src="js/lg-zoom.js"></script>
<script src="js/lg-hash.js"></script>
<script src="js/lg-share.js"></script>
<script src="js/jquery.nice-select.js"></script>
<script src="js/semantic.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/main.js"></script>
</body>
</html>
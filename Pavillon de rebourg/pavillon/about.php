<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>à propos de nous</title>
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
    <div class="vk-about">

        <!--HEADER-->
        <?php include("include/header.php");?>
        <!--ENAD HEADER-->

        <!--BENGIN CONTENT HEADER-->
        <section class="site-content-area">
            <div class="vk-about-banner">
                <!--data-parallax="scroll" data-image-src="images/02_01_about/background.jpg"-->
                <div class="vk-about-banner-destop">
                    <div class="vk-banner-img"></div>
                    <div class="vk-about-banner-caption">
                        <h2>A Propos De Nous</h2>
                        <h3>
                            <a href="index.php">Acceuil</a>
                            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <a href="about.php">A Propos</a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="vk-about-welcometo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="vk-about-welcometo-left">
                                <img src="images/02_01_about/img.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="vk-about-welcometo-right">
                                <div class="vk-about-right-header">
                                    <h3>Bien Venue Chez</h3>
                                    <h2>Pavillon De Ribourg Hotel</h2>
                                    <div class="clearfix"></div>
                                    <div class="vk-about-border"></div>
                                </div>
                                <div class="vk-about-right-content">
                                    <p>
                                        Vous cherchez un hôtel qui réponde précisément à tous vos critères ?
                                        Pour vous, c’est important d’avoir vue sur la mer à partir de votre chambre,
                                        qu’il y ait un jacuzzi ou tout simplement un terrain de golf ?
                                        Vous n’avez pas à faire de concessions, car trouver un bon hôtel pour son séjour,
                                        c’est aussi avoir l’assurance de passer un moment hors du temps, avec plaisir et détente.
                                        Alors Pavillon De Ribourg Hotel peut faire des miracles pour vous !
                                        <a href="rooms_list.php">Cliquer ici</a> pour Consultez Nos offres du moment!.
                                    </p>
                                    <div class="vk-about-right-content-border"></div>
                                </div>
                                <div class="vk-about-right-author">
                                    <p>Victor Henderson - <span><a href="#">Manager</a></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="vk-about-welcometo-share">
                                <div class="vk-about-welcometo-share-border-left"></div>
                                <div class="vk-about-welcometo-share-border-right">

                                </div>
                                <p>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </p>
                                <hr>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vk-about-count-number">
                <div class="vk-paralax-bg parallax-window"  id="slider">
                    <div class="vk-sparta-image-border">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="vk-sparta-count-item">
                                        <div class="vk-sparta-count-item-img">
                                            <img src="images/01_09_header-full-width/count-number/icon-3.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="vk-sparta-count-item-number">
                                            <span class="counter">342</span>
                                        </div>
                                        <h3>Chambres</h3>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="vk-sparta-count-item">
                                        <div class="vk-sparta-count-item-img">
                                            <img src="images/01_09_header-full-width/count-number/icon-2.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="vk-sparta-count-item-number">
                                            <span class="counter">433</span>
                                        </div>
                                        <h3>Staff</h3>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="vk-sparta-count-item">
                                        <div class="vk-sparta-count-item-img">
                                            <img src="images/01_09_header-full-width/count-number/icon-1.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="vk-sparta-count-item-number">
                                            <span class="counter">187</span>
                                        </div>
                                        <h3>Plats</h3>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="vk-sparta-count-item">
                                        <div class="vk-sparta-count-item-img">
                                            <img src="images/01_09_header-full-width/count-number/icon.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="vk-sparta-count-item-number">
                                            <span class="counter">132</span>
                                        </div>
                                        <h3>Piscines</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vk-about-why-choose-us">
                <div class="container">
                    <div class="vk-about-why-choose-us-header">
                        <h3>Pourquoi Nous Choisir</h3>
                        <h2>Consciencieux & Professionnel</h2>
                        <div class="vk-about-boder"></div>
                    </div>
                    <div class="vk-about-why-choose-us-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="vk-about-content-item">
                                    <div class="vk-about-content-item-left">
                                        <span class="ti-medall"></span>
                                    </div>
                                    <div class="vk-about-content-item-right">
                                        <h2>SERVICE PROFESSIONNEL</h2>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vk-about-content-item">
                                    <div class="vk-about-content-item-left">
                                        <span class="ti-cup"></span>
                                    </div>
                                    <div class="vk-about-content-item-right">
                                        <h2>PRESTATIONS DE HAUTE QUALITÉ</h2>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vk-about-content-item">
                                    <div class="vk-about-content-item-left">
                                        <span class="ti-credit-card"></span>
                                    </div>
                                    <div class="vk-about-content-item-right">
                                        <h2>RÉSERVATION ET PAIEMENT FACILES</h2>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vk-about-content-item">
                                    <div class="vk-about-content-item-left">
                                        <span class="ti-layout-media-center-alt"></span>
                                    </div>
                                    <div class="vk-about-content-item-right">
                                        <h2>ÉQUIPEMENTS MODERNES</h2>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vk-about-content-item">
                                    <div class="vk-about-content-item-left">
                                        <span class="ti-crown"></span>
                                    </div>
                                    <div class="vk-about-content-item-right">
                                        <h2>LES MEILLEURS CHEFS DU MONDE</h2>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="vk-about-content-item">
                                    <div class="vk-about-content-item-left">
                                        <span class="ti-basketball"></span>
                                    </div>
                                    <div class="vk-about-content-item-right">
                                        <h2>ACTIVITÉS INTÉRESSANTES</h2>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vk-about-why-choose-us-img">
                <div class="vk-sparta-image">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 vk-clear-padding">
                                <div class="vk-sparta-image-item">
                                    <div class="vk-sparta-item-img">
                                        <a href="rooms_list.php">
                                            <img src="images/01_01_default/vk-sparta-image/img1.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="vk-iamge-item-caption">
                                        <img src="images/01_01_default/vk-sparta-image-icon/spa2.png" alt="">
                                        <h2>SPA</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3  vk-clear-padding">
                                <div class="vk-sparta-image-item">
                                    <div class="vk-sparta-item-img">
                                        <a href="rooms_list.php">
                                            <img src="images/01_01_default/vk-sparta-image/img2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="vk-iamge-item-caption">
                                        <img src="images/01_01_default/vk-sparta-image-icon/food.png" alt="">
                                        <h2>RESTAURANT</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 vk-clear-padding">
                                <div class="vk-sparta-image-item">
                                    <div class="vk-sparta-item-img">
                                        <a href="rooms_list.php">
                                            <img src="images/01_01_default/vk-sparta-image/img3.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="vk-iamge-item-caption">
                                        <img src="images/01_01_default/vk-sparta-image-icon/gym.png" alt="">
                                        <h2>GYM</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 vk-clear-padding">
                                <div class="vk-sparta-image-item">
                                    <div class="vk-sparta-item-img">
                                        <a href="rooms_list.php">
                                            <img src="images/01_01_default/vk-sparta-image/img4.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="vk-iamge-item-caption">
                                        <img src="images/01_01_default/vk-sparta-image-icon/event.png" alt="">
                                        <h2>EVENT</h2>
                                    </div>
                                </div>
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
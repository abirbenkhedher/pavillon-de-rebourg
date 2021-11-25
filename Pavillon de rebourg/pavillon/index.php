<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pavillon De Ribourg</title>
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
<body class="" onload="loadvideo()">
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

<?php include('include/header.php');?>

<div id="main-content" class="site-main-content">
        <div id="home-main-content" class="site-home-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="vk-slide">
                        <div id="owl-slide-home" class="owl-carousel owl-theme animated">
                            <div class="item animated">
                                <div class="vk-item-slide">
                                    <div class="slider-video">
                                        <video id="video-demo" loop>
                                            <source src="images/01_01_default/slide-video/720P.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="vk-item-slide-btn">
                                        <ul>
                                            <li>
                                                <button class="vk-play" onclick="playPause()"></button>
                                                <button class="vk-pause" onclick="playPause()"></button>
                                            </li>
                                            <li>
                                                <button class="vk-mutesound" onclick="enableMute()" type="button"></button>
                                                <button class="vk-enablemute" onclick="disableMute()" type="button"></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="vk-slide-caption">
                                        <h3 class="animated  fadeInDown slide-delay-1">Bien Venue Chez</h3>
                                        <h2 class="animated fadeInUp slide-delay-2 ">Pavillon De Ribourg Hotel</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item  animated">
                                <div class="vk-item-slide">
                                    <img src="images/01_01_default/banner.jpg" alt="" class="img-responsive">
                                    <div class="vk-slide-caption animated">
                                        <h3 class="animated rotateInDownRight slide-delay-1">Bien Venue Chez</h3>
                                        <h2 class="animated fadeInUpBig slide-delay-2">Pavillon De Ribourg Hotel</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item  animated">
                                <div class="vk-item-slide">
                                    <img src="images/01_01_default/banner2.jpg" alt="" class="img-responsive">
                                    <div class="vk-slide-caption animated">
                                        <h3 class="animated flipInX slide-delay-1">Bien Venue Chez</h3>
                                        <h2 class="animated fadeInUp slide-delay-2">Pavillon De Ribourg Hotel</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="vk-check-availability">
                        <div class="container">
                            <div class="vk-check-availability-content">

                            </div>
                        </div>
                    </div>

                    <div class="vk-sparta-about">
                        <div class="container">
                            <div class="vk-sparta-head-title">
                                <h3>Bien Venue Chez</h3>
                                <h2>Pavillon De Ribourg Hotel</h2>
                                <div class="vk-sparta-about-border"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="vk-sparta-about-text">
                                        <p>
                                        Vous cherchez un hôtel qui réponde précisément à tous vos critères ?
                                        Pour vous, c’est important d’avoir vue sur la mer à partir de votre chambre,
                                        qu’il y ait un jacuzzi ou tout simplement un terrain de golf ?
                                        Vous n’avez pas à faire de concessions, car trouver un bon hôtel pour son séjour,
                                        c’est aussi avoir l’assurance de passer un moment hors du temps, avec plaisir et détente.
                                        Alors Pavillon De Ribourg Hotel peut faire des miracles pour vous !
                                        <a href="rooms_list.php"> Cliquer ici</a> pour Consultez Nos offres du moment!. 
                                        </p>
                                    </div>
                                    <div class="vk-sparta-about-author">
                                        <p>Victor Henderson - <span>Manager</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="vk-our-room">
                        <div class="container">
                            <div class="vk-sparta-head-title">
                                <h3>Nos Offres</h3>
                                <h2>Luxueux & Convenient</h2>
                                <div class="vk-sparta-about-border"></div>
                            </div>


                            <!--kjhgfdsq-->
                        </div>
                    </div>





                        <div class="vk-sparta-image">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 vk-clear-padding">
                                        <div class="vk-sparta-image-item">
                                            <div class="vk-sparta-item-img">
                                                <a href="rooms_list.php">
                                                    <img src="images/01_01_default/vk-sparta-image/img1.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="vk-iamge-item-caption">
                                                <img src="images/01_01_default/vk-sparta-image-icon/spa2.png" alt="">
                                                <h2>Spa</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6  vk-clear-padding">
                                        <div class="vk-sparta-image-item">
                                            <div class="vk-sparta-item-img">
                                                <a href="rooms_list.php">
                                                    <img src="images/01_01_default/vk-sparta-image/img2.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="vk-iamge-item-caption">
                                                <img src="images/01_01_default/vk-sparta-image-icon/food.png" alt="">
                                                <h2>Restaurant</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 vk-clear-padding">
                                        <div class="vk-sparta-image-item">
                                            <div class="vk-sparta-item-img">
                                                <a href="rooms_list.php">
                                                    <img src="images/01_01_default/vk-sparta-image/img3.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="vk-iamge-item-caption">
                                                <img src="images/01_01_default/vk-sparta-image-icon/gym.png" alt="">
                                                <h2>Gym</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 vk-clear-padding">
                                        <div class="vk-sparta-image-item">
                                            <div class="vk-sparta-item-img">
                                                <a href="rooms_list.php">
                                                    <img src="images/01_01_default/vk-sparta-image/img4.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="vk-iamge-item-caption">
                                                <img src="images/01_01_default/vk-sparta-image-icon/event.png" alt="">
                                                <h2>Event</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- cbfvbxvxdvxcvxcvxcvxcvxcvxcv -->
                  






                   





                </div>
            </div>
        </div>
    </div>


    <?php include("include/footer.php");?>

</div>
<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery1.min.js"></script>
<script src="plugin/dist/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
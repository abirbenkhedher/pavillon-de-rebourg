<?php

session_start();
$mess=$_GET['mess'] ?? 'nobody';

if ($mess=="ok")
{
    echo "<script>alert('Votre message a eté envoyé');</script>";
}

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacter Nous</title>
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
    <div class="vk-contact-us">

        <!--HEADER-->
        <?php include('include/header.php');?>

        <!--ENAD HEADER-->

        <!--BENGIN CONTENT HEADER-->
        <section class="site-content-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="vk-gallery-grid-full-banner">

                        <div class="vk-about-banner">
                            <div class="vk-about-banner-destop" data-parallax="scroll" data-image-src="images/02_07_contact_us/background.jpg">
                                <div class="vk-banner-img"></div>
                                <div class="vk-about-banner-caption">
                                    <h2>Contacter Nous</h2>
                                    <h3>
                                    <a href="index.php">Acceuil</a>
                                        <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                        <a href="contact.php">Contact</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="vk-contact-us">
                        <div class="col-md-7 vk-clear-padding">
                            <div class="vk-contact-us-map">
                                <div id="map"></div>
                                <div class="mapouter"><div class="gmap_canvas"><iframe width="585" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Rue%20des%20%C3%8Eles,%2029810%20Plouarzel,%20France&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://soap2day-to.com">how to get soap2day on firestick</a><br><style>.mapouter{position:relative;text-align:right;height:585px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:585px;}</style></div></div>
                            </div>
                        </div>
                        <div class="col-md-5 vk-clear-padding">
                            <div class="vk-contact-us-info">
                                <div class="vk-contact-us-info-header">
                                    <h3>Contacter Nous</h3>
                                    <h2>Contacter Nous</h2>
                                    <div class="clearfix"></div>
                                    <div class="vk-contact-border"></div>
                                </div>
                                <div class="vk-contact-us-info-text">
                                    <ul>
                                        <li>
                                            <div class="vk-contact-us-info-text-icon">
                                                <span class="ti-location-pin"></span>
                                            </div>
                                            <div class="vk-contact-us-info-text-right">
                                                <h4>ADRESSE</h4>
                                                <p>Rue des Îles 29810 Plouarzel, France</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="vk-contact-us-info-text-icon">
                                                <span class="ti-email"></span>
                                            </div>
                                            <div class="vk-contact-us-info-text-right">
                                                <h4>Email</h4>
                                                <p><a href="mailto: contact@ribourg.com "> contact@ribourg.com </a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="vk-contact-us-info-text-icon">
                                                <span class="ti-mobile"></span>
                                            </div>
                                            <div class="vk-contact-us-info-text-right">
                                                <h4>TEL</h4>
                                                <p> <a href="tel:(+233) 123 456789">(+233) 123 456789</a> </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>



                    <form action="controller/ajoutmessage.php" method="post">
                    <div class="vk-contact-form">
                        <div class="container">
                            <div class="vk-contact-form-info-header">
                                <h3>Contacter Nous</h3>
                                <h2>Envoyez Nous Un Email</h2>
                                <div class="clearfix"></div>
                                <div class="vk-contact-border"></div>
                            </div>
                            <div class="vk-contact-form-info-body">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 15px;color: #b0914f;">
                                        <div id="message-contact"></div>
                                    </div>
                                    <form action="controller/AjoutContact.php" method="post">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <input type="text" id="name_contact" name="nom_message" required placeholder="Nom ..." class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <input type="text" id="email_contact" name="prenom_message" required placeholder="Prénom ..." class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <input type="email" id="subject" name="email_message" required placeholder="Email ..." class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <input type="text" id="subject" name="sujet_message" required placeholder="Sujet ..." class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="message_contact" required name="message_message" placeholder="Message ..." rows="5"></textarea>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        

                                        <div class="form-group">
                                            <div class="vk-btn-send">
                                                <button type="submit" class="btn vk-btn-primary btn-block" >Envoyer <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
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
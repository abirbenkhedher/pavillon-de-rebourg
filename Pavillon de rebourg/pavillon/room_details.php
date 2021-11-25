
<?php 



include('include/connect_db.php');
$id_annonce = $_GET['id'];
$req = $bdd->query("SELECT * FROM annonce  WHERE id_annonce LIKE '$id_annonce'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réservation</title>
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
                            <h2>Detailles De Réservation</h2>
                            <h3>
                            <a href="index.php">Acceuil</a>
                                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <a href="rooms_list.php">Réservation</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>


            <?php while($data = $req->fetch()){?>
            <div class="vk-room-details-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="vk-room-details-content-left">
                                <div class="vk-room-details-left-slide">
                                    <div id="owl-slide-room-details" class="vk-owl-one-item owl-carousel owl-theme">
                                        <div class="item">
                                        <img src="../assets/images/rooms/<?=$data['image_annonce'];?>" alt="" class="img-responsive">
                                        </div>
                                   
                                    </div>
                                </div>


                                <div class="vk-room-details-title-price">
                                    <div class="vk-room-details-title">
                                        <h2><?php echo $data['titre_annonce'] ?></h2>
                                    </div>
                                    <div class="vk-room-details-price">
                                        <ul>
                                            <li>
                                                Prix:
                                            </li>
                                            <li>
                                                <p><?php echo $data['prix_annonce'] ?>/<span>NIGHT</span></p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="vk-room-details-description">
                                    <h4>Description</h4>
                                    <p><?php echo $data['description_annonce']?>
                                    </p>
                                </div>



                               











                                

                                <div class="vk-room-details-room-details">
                                    <h4>
                                        <span>
                                  
                                </span>
                                    </h4>

                            
                                </div>
                            </div>
                        </div>

                        <?php } ?> 
                        




                        <div class="col-md-4">
                            <div class="vk-room-details-content-right">
                                <h3>Confirmation</h3>
                                <form action="controller/AjoutReservation.php" method="post" class="form-horizontal">
                                    <div class="form-group"> <!-- Date input -->
                                        <div class="col-md-12">
                                            <label class="control-label">Date d'arriver</label>
                                            <div class="input-group date date-check-in" data-date="12-02-2017" data-date-format="mm-dd-yyyy">
                                                <input name="date1" class="form-control" type="text" value="12-02-2017">
                                                <span class="input-group-addon btn"><span class="ti-calendar" id="date1"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group"> <!-- Date input -->
                                        <div class="col-md-12">
                                            <label class="control-label">Date de départ</label>
                                            <div class="input-group date date-check-out" data-date="12-02-2017" data-date-format="mm-dd-yyyy">
                                                <input name="date2" class="form-control" type="text" value="12-02-2017">
                                                <span class="input-group-addon btn"><span class="ti-calendar" id="date2"></span></span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                            <label class="control-label">Payer En Ligne</label>
                                            <div class="vk-make-a-re-left-img">
                                                <a href="#"><img src="images/05_03_make_a_reservation/paypal.jpg" alt="" class="img-responsive"></a>
                                            </div>
                                            <div class="vk-make-a-left-btn">
                                                <h4><a href="#"> Payer En Ligne</a></h4>
                                            </div>

                                        </div>


                                    <div class="form-group">
                                        <div class="col-md-12">
                                   




                                        <div class="vk-btn-send">
                                        <div class="vk-dark-our-room-item-book-right">

                                        <input type="Submit" name="Submit" value="Comfirmer La Réservation"  style="width: 300px; margin: 0 auto;" >
                                        <input type="hidden" id="id_annonce" name="id_annonce" value="<?=$id_annonce?>">
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

            <div class="container-fluid">
                <div class="row">
                    <div class="vk-room-details-related-rooms">
                       
                            
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
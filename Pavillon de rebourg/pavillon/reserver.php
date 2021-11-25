<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>05_03_make-a-reservation</title>
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
    <div class="vk-make-a-reservation">

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
                            <h2>Reservation</h2>
                            <h3>
                                <a href="#">Reservation</a>
                                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <a href="#">Make a reservation</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vk-make-a-reservation-content">
                <div class="container">
                    <div class="vk-select-room-breakcrumb">
                        <ul>
                            <li class="completed">
                                <a href="javascript:void(0);">1. Choose Date</a>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0);">2. Select Room</a>
                                <span class="round-tabs five">
                             <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                            </li>
                            <li class="make-a-reservation">
                                <a href="javascript:void(0);">3. Make A Reservation</a>
                                <span class="round-tabs five">
                              <i class="fa fa-check" aria-hidden="true"></i>
                         </span>
                            </li>
                            <li>
                                <a href="javascript:void(0);">4. Confirmation</a>
                                <span class="round-tabs five">
                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                         </span>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="vk-make-a-reservation-info">
                            <div class="col-md-8">
                                <div class="vk-make-a-reservation-left">
                                    <h3>Your Informations</h3>
                                    <div class="row">
                                        <form action="action.php">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input type="text" id="firstName" placeholder="First name *" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input type="text" id="lastName" placeholder="Last name *" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input type="email" id="email" placeholder="Email *" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input type="tel" id="phone" placeholder="Phone *" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <textarea class="form-control" id="address" name="address" placeholder="Address Note"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <textarea class="form-control" id="additional" name="additional" placeholder="Additional Note"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <input type="text" id="couponName" placeholder="Counpon Code" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <div class="vk-btn-send">
                                                        <h4><a href="comfirmation.php">Contact Now</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <h3>OR</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vk-make-a-re-left-img">
                                                <a href="#"><img src="images/05_03_make_a_reservation/paypal.jpg" alt="" class="img-responsive"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vk-make-a-left-btn">
                                                <h4><a href="#"> Pay Now</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="vk-make-a-reservation-right">
                                    <h3>Your Reservation</h3>
                                    <div class="vk-make-a-room">
                                        <div class="vk-make-a-room1">
                                            <h3>Room 1 : Class Room <span>($200/night)</span></h3>
                                            <ul>
                                                <li>Adult: 2</li>
                                                <li>Children: 1</li>
                                                <li>night(s): 2</li>
                                            </ul>
                                            <h4>$400.00</h4>
                                        </div>
                                        <div class="vk-make-a-room2">
                                            <h3>Room 2 : Double Room <span>($200/night)</span></h3>
                                            <ul>
                                                <li>Adult: 2</li>
                                                <li>Children: 1</li>
                                                <li>night(s): 2</li>
                                            </ul>
                                            <h4>$400.00</h4>
                                        </div>
                                    </div>
                                    <div class="vk-make-a-total">
                                        <table class="shop_table shop_table_responsive">
                                            <tbody>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td data-title="Tổng cộng">$800.00 </td>
                                            </tr>
                                            <tr class="tax-total">
                                                <th>Tax 10%</th>
                                                <td data-title="Thuế">$80.00</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="vk-make-a-grand-total">
                                        <table class="shop_table shop_table_responsive">
                                            <tbody>
                                            <tr class="order-total">
                                                <th>Grand Total</th>
                                                <td data-title="Grand-total">$880.00 </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="vk-make-a-btn">
                                        <h4><a href="#">Edit Booking</a></h4>
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